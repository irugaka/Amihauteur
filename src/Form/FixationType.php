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
use Doctrine\ORM\EntityRepository;

class FixationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Fixation', EntityType::class, [
            'class' => Fixation::class,
            'choice_value' => 'id',
            'choice_label' => 'nomFixation',
            'query_builder' => function(EntityRepository $er)
            {
            return $er->createQueryBuilder('a')
            ->andWhere('a.Commercialise = :val')
            ->setParameter('val', 1)
            ->orderBy('a.id', 'ASC');
            }
        ])
        ->add('Qte', NumberType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EchelleFixation::class,
        ]);
    }
}
