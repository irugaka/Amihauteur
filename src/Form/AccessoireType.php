<?php

namespace App\Form;

use App\Entity\Echelle;
use App\Entity\Accessoire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccessoireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('id', EntityType::class, [
            'class'        => Accessoire::class,
            'choice_label' => function (Accessoire $Accessoire) {
                return $Accessoire->getNomAccessoire() . ' ' . $Accessoire->getPrixAccessoire() . ' ' . '€';},
            'expanded'     => true,
            'multiple'     => true,
            'label' => 'prixAccessoire',
        ])
        ->add('prix', NumberType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([

        ]);
    }
}
