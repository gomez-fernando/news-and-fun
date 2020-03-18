<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Service;
use App\Entity\User;
use App\Form\ServiceType;
use Symfony\Component\Security\Core\User\UserInterface;

// use Doctrine\Common\Collections\Collection;

class ServiceController extends AbstractController
{
    public function index()
    {
        // $em = $this->getDoctrine()->getManager();

        // prueba de entidades y relaciones
        // $service_repo = $this->getDoctrine()->getRepository(Service::class);
        // // $services = $service_repo->findAll();
        // $services = $service_repo->findBy([], ['id' => 'DESC']);

        //    foreach ($services as $service){
        //        echo $service->getUser()->getName().'--->'.$service->getRssService().'<br>';
        //    }
//        ----------------------------
//            todos los usuarios y sus servicios
        // $user_repo = $this->getDoctrine()->getRepository(User::class);
        // $users = $user_repo->findAll();
        // foreach ($users as $user) {
        //     echo "<h1>{$user->getName()} {$user->getSurname()}</h1>";

        //     foreach ($user->getServices() as $service) {
        //         echo $service->getRssService().'<br>';
        //     }
        // }

        // return $this->render('service/index.html.twig', [
        //     'controller_name' => 'ServiceController',
        // ]);

        // return $this->render('service/index.html.twig', [
        //     'services' => $services,
        // ]);
        return $this->render('service/index.html.twig');
    }

    public function detail(Service $service)
    {
        if (!$service) {
            return $this->redirectToRoute('my_services');
        }

        return $this->render('service/detail.html.twig', [
            'service' => $service
        ]);
    }

    public function creation(Request $request, UserInterface $user)
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // var_dump($service);
            $service->setCreatedAt(new \Datetime('now'));
            // var_dump($user);
            $service->setUser($user);
            // var_dump($service);
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            return $this->redirect(
                $this->generateUrl('service_detail', ['id' => $service->getId()])
            );
        }

        return $this->render('service/creation.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function myServices(UserInterface $user)
    {
        $service_repo = $this->getDoctrine()->getRepository(Service::class);
        // $services = $service_repo->findAll();
        $services = $service_repo->findBy(['user' => $user->getId()]);

        return $this->render('service/my_services.html.twig', [
            'services' => $services
        ]);

//        $services = $user->getId();
//
//        var_dump($services);
//
//        return $this->render('task/my_services.html.twig', [
//            'services' => $services
//        ]);
    }

    public function edit(Request $request, UserInterface $user, Service $service)
    {
        // var_dump($service);
        if (!$user || $user->getId() != $service->getUser()->getId()) {
            return $this->redirectToRoute('my_services');
        }
        $form = $this->createForm(ServiceType::class, $service);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // var_dump($service);
            // $service->setCreatedAt(new \Datetime('now'));
            // var_dump($user);
            // $service->setUser($user);
            // var_dump($service);
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            return $this->redirect(
                $this->generateUrl('service_detail', ['id' => $service->getId()])
            );
        }

        return $this->render('service/creation.html.twig', [
            'edit' => true,
            'form' => $form->createView()
        ]);
    }

    public function delete(UserInterface $user, Service $service)
    {
        if (!$user || !$service || $user->getId() != $service->getUser()->getId()) {
            return $this->redirectToRoute('my_services');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($service);
        $em->flush();

        return $this->redirectToRoute('my_services');
    }
}