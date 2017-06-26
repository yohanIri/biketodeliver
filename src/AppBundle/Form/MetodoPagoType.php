<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Blank;


class MetodoPagoType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder,array $options){
        
        $builder
            ->add('seguroRobo', CheckBoxType::class)
            ->add('seguroLLuvia', CheckBoxType::class)
            ->add('aceptarContratoDeUso', CheckBoxType::class)
            ->add('metodoPago', ChoiceType::class, array(
                'choices'   => array(
                    'efectivo'   => 'efectivo',
                    'tarjeta' => 'tarjeta',
                    'paypal'   => 'paypal',
                ),
                'multiple'  => false,
                'expanded'  => true,
            ))
                
            ->add('reserva', SubmitType::class);
    }
}
