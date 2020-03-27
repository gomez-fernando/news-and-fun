<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Service;
use App\Entity\User;
use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Component\Security\Core\User\UserInterface;

// use Doctrine\Common\Collections\Collection;

class CategoryController extends AbstractController
{
    public function detail(Category $category)
    {
        if (!$category) {
            return $this->redirectToRoute('my_categories');
        }

        return $this->render('category/detail.html.twig', [
            'category' => $category
        ]);
    }
    
    public function creation(Request $request, UserInterface $user)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // var_dump($service);
            // var_dump($user);
            $category->setUser($user);
            // var_dump($service);
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('my_categories');

            // return $this->redirect(
            //     $this->generateUrl('service_detail', ['id' => $service->getId()])
            // );
        }

        return $this->render('category/creation.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function myCategories(UserInterface $user)
    {
        $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // $services = $service_repo->findAll();
        $categories = $category_repo->findBy(['user' => $user->getId()]);

        return $this->render('category/my_categories.html.twig', [
            'categories' => $categories
        ]);
    }

    public function edit(Request $request, UserInterface $user, Category $category)
    {
        // var_dump($category);
        if (!$user || $user->getId() != $category->getUser()->getId()) {
            return $this->redirectToRoute('my_categories');
        }
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // var_dump($category);
            // $category->setCreatedAt(new \Datetime('now'));
            // var_dump($user);
            // $category->setUser($user);
            // var_dump($category);
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('my_categories');
        }

        return $this->render('category/creation.html.twig', [
            'edit' => true,
            'form' => $form->createView()
        ]);
    }

    public function delete(UserInterface $user, Category $category)
    {
        if (!$user || !$category || $user->getId() != $category->getUser()->getId()) {
            return $this->redirectToRoute('my_categories');
        }

        $em = $this->getDoctrine()->getManager();

        // eliminar los servicios de la categoria antes de poder eliminar la categoria
        // $categoryId = $category->getId();
        $service_repo = $this->getDoctrine()->getRepository(Service::class);
        // $services = $service_repo->findAll();
        $services = $service_repo->findBy(['category' => $category->getId()]);

        foreach ($services as $service) {
            $em->remove($service);
            $em->flush();
        }
        
        $em->remove($category);
        $em->flush();

        return $this->redirectToRoute('my_categories');
    }

    public function byCategory(UserInterface $user, Category $category)
    {
        $service_repo = $this->getDoctrine()->getRepository(Service::class);
        // $services = $service_repo->findAll();
        $services = $service_repo->findBy([
            'user' => $user->getId(),
            'category' => $category->getId(),
        ]);

        // $servicesByCategory = $services->findBy(['category' => $category->getId()]);

        // $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // // $categorys = $category_repo->findAll();
        // $categories = $category_repo->findBy(['user' => $user->getId()]);

        return $this->render('service/by_category.html.twig', [
            'services' => $services,
            'category_name' => $category->getName()
        ]);
    }
}