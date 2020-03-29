<?php
namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Category;
use Symfony\Component\Security\Core\User\UserInterface;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // global $kernel;

        // if ('AppCache' == get_class($kernel)) {
        //     $kernel = $kernel->getKernel();
        // }
        // $doctrine = $kernel->getContainer()->get('doctrine');

        // $category_repo=$doctrine->getRepository(Category::class);
        // $category = $category_repo->findBy(
        //     ['user' => $user->getId()],
        //     ['name' => 'ASC']
        // );
        // dd($category);

        // $category_repo = $this->getDoctrine()->getRepository(Category::class);
        // // $services = $service_repo->findAll();
        // $categories = $category_repo->findBy(
        //     ['user' => $user->getId()],
        //     ['name' => 'ASC']
        // );
        // dd($categories);

        $builder->add('name', TextType::class, array(
            'label' => 'Nombre'
        ))
        ->add('description', TextareaType::class, array(
            'label' => 'Descripción'
        ))
        ->add('category', EntityType::class, [
            'class' => Category::class,
            'label' => 'Categoría',
            'choice_label' => 'name'
        ])
        ->add('country', TextType::class, array(
            'label' => 'País'
        ))
        ->add('url_service', TextType::class, array(
            'label' => 'Dirección web'
        ))
        ->add('submit', SubmitType::class, array(
            'label' => 'Guardar'
        ));
    }
}