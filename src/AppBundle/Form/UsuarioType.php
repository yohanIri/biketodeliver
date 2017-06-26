<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Blank;


class UsuarioType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder,array $options){
        
        $builder
            ->add('nombre', TextType::class)
            ->add('apellido', TextType::class)
            ->add('dNIPassaporte', TextType::class)
            ->add('telefono', TextType::class)
            ->add('email', TextType::class)
                
            ->add('siguiente', SubmitType::class);
    }
}
