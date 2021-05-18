<?php

namespace App\Form;

use App\Entity\Config;
use App\Entity\Echelle;
use App\Entity\TypeEchelle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EchelleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Echelle_TypeEchelle', EntityType::class,array(
                'class'=> TypeEchelle::class,
                'choice_label'=>'LibelleTypeEchelle',
                'expanded' => true,
                    ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Echelle::class,
        ]);
    }
}
