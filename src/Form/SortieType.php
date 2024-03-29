<?php

namespace App\Form;

use App\Entity\Sortie;
use App\Entity\Echelle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('echelleSortie', EntityType::class, [
            'class'=>Sortie::class,
            'choice_label'=> 'LibelleSortie',
            'choice_value'=>'id',
            'expanded' => true,
        ])
    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Echelle::class, ]);
    }
}
