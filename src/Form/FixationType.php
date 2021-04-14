<?php

namespace App\Form;

use App\Entity\Fixation;
use App\Entity\Echelle;
use App\Entity\EchelleFixation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FixationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('departFixation', NumberType::class)
            ->add('hauteurRelativeFixation', NumberType::class)
            ->add('hauteurAbsolueFixation', NumberType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Fixation::class,
        ]);
    }
}
