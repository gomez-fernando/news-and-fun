<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
//    public function index()
//    {
//        return $this->render('user/index.html.twig', [
//            'controller_name' => 'UserController',
//        ]);
//    }
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        // crear formulario
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

//        rellenar el objeto con los datos del formulaio
        $form->handleRequest($request);

//        comprobar si se ha enviado el formulario
        if ($form->isSubmitted()  &&  $form->isValid()) {
//            var_dump($user);
//            die();
//            modificar el objeto para guardarlo
            $user->setRole('ROLE_USER');
//            $date_now = (new \DateTime())->format('d-m-Y H:i:s');

            $user->setCreatedAt(new \Datetime('now'));

//            cifrar contraseña
            $encoded = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);

//            var_dump($user);
//            guardar usuario
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

//            return $this->redirectToRoute('services');
            return $this->redirectToRoute('login');
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();


        return $this->render('user/login.html.twig', array(
            'error' => $error,
            'last_username' => $lastUsername
        ));
    }

    public function profile_view(UserInterface $user)
    {
        return $this->render('user/profile_view.html.twig');
    }

    public function profile_edit(Request $request, UserInterface $user, UserPasswordEncoderInterface $encoder)
    {
        if (!$user) {
            return $this->redirectToRoute('my_services');
        }

        // var_dump($request);
        // die();
        $user->setName($request->get("_name"));
        $user->setSurname($request->get("_surname"));
        $user->setNick($request->get("_nick"));
        $user->setEmail($request->get("_email"));
        if ($request->get("_password") != "") {
            //            cifrar contraseña
            $encoded = $encoder->encodePassword($user, $request->get("_password"));
            $user->setPassword($encoded);
        }
        // dd($user);
        // $service->setCreatedAt(new \Datetime('now'));
        // var_dump($user);
        // $service->setUser($user);
        // var_dump($service);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('services');
    }
}