<?php

namespace App\Form;

use App\Entity\EchelleAccessoire;
use App\Entity\Accessoire;
use App\Entity\Echelle;
use App\Form\AccessoireType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccessoireType2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('EchelleAccessoire', CollectionType::class, [
            'allow_add' => true,
            'label' => false,
            'by_reference' => false,
            'allow_delete' => true,
            'entry_type' => AccessoireType::class,
            'entry_options' => [
                'label' => false ]])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Echelle::class,
        ]);
    }
}
