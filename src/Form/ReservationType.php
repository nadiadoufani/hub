<?php

namespace App\Form;

use App\Entity\Film;
use App\Entity\User;

use App\Entity\Reservation;
use App\Entity\SalleDeProjection;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombredeticket', TextType::class,[

                'label'=>'nombre de tickets'
            ])
            ->add('idfilm', EntityType::class,['class'=>Film::class,
                 'choice_label'=>'nomdefilm',
                'label'=>'nom de film'
            ])
    
            ->add('idcinema', EntityType::class,['class'=>SalleDeProjection::class,
            'choice_label'=>'nom',
           'label'=>'nom de salle de projection'
       ])

            ->add('submit', SubmitType::class,[
                'label'=> "payer",
                'attr' => [

                    'class'=>'btn w-100 text-white btn-lg bg-dark',
                ]
            ])
            ->getForm();
        ;
    }

  

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
