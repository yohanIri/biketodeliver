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


class ReservaType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder,array $options){
        
        $builder
            ->add('fechaEntrega', DateTimeType::class)
            ->add('fechaRecogida', DateTimeType::class)
            ->add('direccionDeEntrega', TextType::class)
            ->add('direccionDeRecogida', TextType::class)
            ->add('clasicBike', IntegerType::class, array('mapped' => false,
                'attr' => array(
                    'min' => 1,
                    'max' => 15
                )
            ))
            ->add('e-bike', IntegerType::class, array('mapped' => false,
                'attr' => array(
                    'min' => 1,
                    'max' => 6
                )
            ))
            ->add('biciDe110A125Cm', IntegerType::class, array('mapped' => false,
                'attr' => array(
                    'min' => 1,
                    'max' => 2
                )
            ))
            ->add('biciDe125A135Cm', IntegerType::class, array('mapped' => false,
                'attr' => array(
                    'min' => 1,
                    'max' => 2
                )
            ))
            ->add('biciDe135A150Cm', IntegerType::class, array('mapped' => false,
                'attr' => array(
                    'min' => 1,
                    'max' => 2
                )
            ))
            ->add('sillitaNene', IntegerType::class, array('mapped' => false,
                'attr' => array(
                    'min' => 1,
                    'max' => 5
                )
            ))
            ->add('siguiente', SubmitType::class);
        ; 
    }
        
    public function configureOptions(OptionsResolver $resolver) 
    {
        $resolver->setDefaults(array(
                'data_class' => 'AppBundle\Entity\Reserva',
        ));
    }
    
    public function getBlockPrefix()
    {
        return 'reserva';
    }
}
