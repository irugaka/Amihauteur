<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\VarDumper\Cloner\Data;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class,[
                'required' => 'false'
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'J\'accepte les Conditions générales d\'utilisation',
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter les termes.',
                    ]),
                ],
            ])
            ->add('nom')
            ->add('prenom')
            ->add('ville')
            ->add('plainPassword', PasswordType::class, [
                'required' => false,
                'label' => 'Mot de passe',
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'constraints' => [
                    /*new NotBlank([
                        'message' => 'Please enter a password',
                    ]),*/
                    new Length([
                        'min' => 9,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('Telephone', NumberType::class,[
                'constraints' => [
                    new Length([
                        'max' => 9,
                        'min' => 9,
                        'minMessage' => 'Le numéro doit faire 10 chiffres'
                    ]

                    )
                ]
            ])
            ->add('Adresse')
            ->add('Entreprise')
            ->add('CodePostal')
            ->add('Pays')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
