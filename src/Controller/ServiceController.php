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

        $em = $this->getDoctrine()->getManager();
        // $countries = $em->getRepository(Service::class)->findAll(['distinct' => 'country', 'limit' => 1]);

        $conn = $this->getDoctrine()->getManager()->getConnection();

        $sql = 'SELECT distinct country FROM services where user_id = ' . $userId . ' ORDER BY country ASC';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['country' => 'España']);

        // returns an array of arrays (i.e. a raw data set)
        $countries = $stmt->fetchAll();

        // $countries = $service_repo->findBy(
        //     ['country' => 'España']
        // );

        // dd($countries);

        $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // $categorys = $category_repo->findAll();
        $categories = $category_repo->findBy(
            ['user' => $user->getId()],
            ['name' => 'ASC']
        );

        return $this->render('service/services.html.twig', [
            'services' => $services,
            'categories' => $categories,
            'countries' => $countries
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

    // public function creation(Request $request, UserInterface $user)
    // {
    //     $service = new Service();
    //     $form = $this->createForm(ServiceType::class, $service);

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         // var_dump($service);
    //         $service->setCreatedAt(new \Datetime('now'));
    //         // var_dump($user);
    //         $service->setUser($user);
    //         // var_dump($service);
    //         $em = $this->getDoctrine()->getManager();
    //         $em->persist($service);
    //         $em->flush();

    //         return $this->redirectToRoute('my_services');

    //         // return $this->redirect(
    //         //     $this->generateUrl('service_detail', ['id' => $service->getId()])
    //         // );
    //     }

    //     return $this->render('service/creation.html.twig', [
    //         'form' => $form->createView()
    //     ]);
    // }

    public function creationView(UserInterface $user)
    {
        $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // $categorys = $category_repo->findAll();
        $categories = $category_repo->findBy(
            ['user' => $user->getId()],
            ['name' => 'ASC']
        );

        return $this->render('service/creation_form.html.twig', [
            'categories' => $categories
        ]);
    }

    public function creation(Request $request, UserInterface $user)
    {
        $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // $services = $service_repo->findAll();
        $category = $category_repo->findBy(['id' => $request->get("_category")]);

        // dd($category);
        // dd($request->get("_category"));
        $service = new Service();
        // dd($service);

        $service->setName($request->get("_name"));
        $service->setDescription($request->get("_description"));
        $service->setCategory($category[0]);
        $service->setCountry($request->get("_country"));
        $service->setUrlService($request->get("_url_service"));

        // var_dump($service);
        $service->setCreatedAt(new \Datetime('now'));
        // var_dump($user);
        $service->setUser($user);
        // dd($service);
        $em = $this->getDoctrine()->getManager();
        $em->persist($service);
        $em->flush();

        return $this->redirectToRoute('my_services');
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

    public function editionView(UserInterface $user, Service $service)
    {
        $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // $categorys = $category_repo->findAll();
        $categories = $category_repo->findBy(
            ['user' => $user->getId()],
            ['name' => 'ASC']
        );

        // dd($service);

        return $this->render('service/edition_form.html.twig', [
            'categories' => $categories,
            'service' => $service
        ]);
    }

    public function edit(Request $request, UserInterface $user)
    {
        // dd($request);
        $service_repo = $this->getDoctrine()->getRepository(Service::class);
        // $services = $service_repo->findAll();
        $service_array = $service_repo->findBy(['id' => $request->get("_id")]);

        $service = $service_array[0];

        // dd($service);
        $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // $services = $service_repo->findAll();
        $category = $category_repo->findBy(['id' => $request->get("_category")]);

        // dd($category);
        // dd($request->get("_category"));
        // $service = new Service();
        // dd($service);

        $service->setName($request->get("_name"));
        $service->setDescription($request->get("_description"));
        $service->setCategory($category[0]);
        $service->setCountry($request->get("_country"));
        $service->setUrlService($request->get("_url_service"));

        // var_dump($service);
        $service->setCreatedAt(new \Datetime('now'));
        // var_dump($user);
        $service->setUser($user);
        // dd($service);
        $em = $this->getDoctrine()->getManager();
        $em->persist($service);
        $em->flush();

        return $this->redirectToRoute('my_services');
        


        // // var_dump($service);
        // if (!$user || $user->getId() != $service->getUser()->getId()) {
        //     return $this->redirectToRoute('my_services');
        // }
        // $form = $this->createForm(ServiceType::class, $service);

        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     // var_dump($service);
        //     // $service->setCreatedAt(new \Datetime('now'));
        //     // var_dump($user);
        //     // $service->setUser($user);
        //     // var_dump($service);
        //     $em = $this->getDoctrine()->getManager();
        //     $em->persist($service);
        //     $em->flush();

        //     return $this->redirect(
        //         $this->generateUrl('service_detail', ['id' => $service->getId()])
        //     );
        // }

        // return $this->render('service/creation.html.twig', [
        //     'edit' => true,
        //     'form' => $form->createView()
        // ]);
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

    public function byCountry(UserInterface $user, string $country)
    {
        // dd($country);

        $service_repo = $this->getDoctrine()->getRepository(Service::class);
        // $services = $service_repo->findAll();
        $services = $service_repo->findBy([
            'user' => $user->getId(),
            'country' => $country,
        ]);

        // dd($services);
        // $servicesByCategory = $services->findBy(['category' => $category->getId()]);

        // $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // // $categorys = $category_repo->findAll();
        // $categories = $category_repo->findBy(['user' => $user->getId()]);

        return $this->render('service/by_country.html.twig', [
            'services' => $services,
            'country' => $country
        ]);
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