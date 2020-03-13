<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Service;
use App\Entity\User;

class ServiceController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        // prueba de entidades y relaciones
//        $service_repo = $this->getDoctrine()->getRepository(Service::class);
//        $services = $service_repo->findAll();
//
//        foreach ($services as $service){
//            echo $service->getUser()->getName().'--->'.$service->getRssService().'<br>';
//        }
//        ----------------------------
//            todos los usuarios y sus servicios
        // $user_repo = $this->getDoctrine()->getRepository(User::class);
        // $users = $user_repo->findAll();
        // foreach($users as $user){
        //     echo "<h1>{$user->getName()} {$user->getSurname()}</h1>";

        //     foreach ($user->getServices() as $service){
        //         echo $service->getRssService().'<br>';
        //     }
        // }

        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
}