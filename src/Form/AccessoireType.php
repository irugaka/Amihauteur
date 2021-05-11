<?php

namespace App\Form;

use App\Entity\Echelle;
use App\Entity\Accessoire;
use App\Entity\EchelleAccessoire;
use App\Repository\AccessoireRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccessoireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Accessoire', EntityType::class, [
            'class' => Accessoire::class,
            'choice_value' => 'id',
            'choice_label' => 'nomAccessoire',
            'query_builder' => function(EntityRepository $er)
            {
            return $er->createQueryBuilder('a')
            ->andWhere('a.Commercialise = :val')
            ->setParameter('val', 1)
            ->orderBy('a.id', 'ASC');
            }
        ])
        ->add('Qte', NumberType::class);
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EchelleAccessoire::class,
        ]);
    }
}
