<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $categories = array('noticias nacionales', 'musica');
        
        $builder->add('name', TextType::class, array(
            'label' => 'Nombre'
        ))
        ->add('description', TextareaType::class, array(
            'label' => 'Descripción'
        ))
        ->add('category', ChoiceType::class, array(
            'label' => 'Categoría',
            'choices' => $categories
          ))
        ->add('url_service', TextType::class, array(
            'label' => 'Dirección web'
        ))
        ->add('submit', SubmitType::class, array(
            'label' => 'Guardar'
        ));
    }
}