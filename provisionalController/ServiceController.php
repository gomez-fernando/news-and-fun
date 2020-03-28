<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Service;
use App\Entity\User;
use App\Entity\Category;
use App\Form\ServiceType;
use Symfony\Component\Security\Core\User\UserInterface;

// use Doctrine\Common\Collections\Collection;

class ServiceController extends AbstractController
{
    public function index()
    {
        return $this->render('service/index.html.twig');
    }

    public function services(UserInterface $user)
    {
        $service_repo = $this->getDoctrine()->getRepository(Service::class);
        // $services = $service_repo->findAll();
        $services = $service_repo->findBy(
            ['user' => $user->getId()],
            ['name' => 'ASC']
        );

        $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // $categorys = $category_repo->findAll();
        $categories = $category_repo->findBy(
            ['user' => $user->getId()],
            ['name' => 'ASC']
        );

        return $this->render('service/services.html.twig', [
            'services' => $services,
            'categories' => $categories,
        ]);
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

            return $this->redirectToRoute('my_services');

            // return $this->redirect(
            //     $this->generateUrl('service_detail', ['id' => $service->getId()])
            // );
        }

        return $this->render('service/creation.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function myServices(UserInterface $user)
    {
        $service_repo = $this->getDoctrine()->getRepository(Service::class);
        // $services = $service_repo->findAll();
        $services = $service_repo->findBy(
            ['user' => $user->getId()],
            ['name' => 'ASC']
        );

        return $this->render('service/my_services.html.twig', [
            'services' => $services
        ]);
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
    
    public function terminosYCondiciones()
    {
        return $this->render('legal/terminos_y_condiciones.html.twig');
    }

    public function terminosDeUso()
    {
        return $this->render('legal/terminos_de_uso.html.twig');
    }

    public function politicaDePrivacidad()
    {
        return $this->render('legal/politica_de_privacidad.html.twig');
    }

    public function politicaDeCookies()
    {
        return $this->render('legal/politica_de_cookies.html.twig');
    }

    public function medios()
    {
        return $this->render('legal/medios.html.twig');
    }
}