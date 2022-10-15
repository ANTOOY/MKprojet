<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder 
    
        


            ->add('email', EmailType::class, [
                'label' => "Votre adresse email :",
                'attr' => [
                    'placeholder' => "Votre adresse email :"
                
                ],
            ])
                


            // ->add('agreeTerms', CheckboxType::class, [
            //     'mapped' => false,
            //     'constraints' => [
            //         new IsTrue([
            //             'message' => 'Accepter les conditons.',
            //         ]),
            //     ],
            // ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'label' => "Votre mot de passe :",
                'attr' => ['autocomplete' => 'new-password'],
                'attr' => [
                    'placeholder' => "Entrez votre mot de passe",
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre mot de passe',
                    ]),
                    
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])

            ->add('FirstName', TextType::class, [
                'label' => "votre prénom : " ,
                'required' => true,
                'attr' => [
                    'placeholder' => "Entrez votre prénom",
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => "ce champs ne doit pas être vide",
                    ]),
                    ]

                ])

                    ->add('Name', TextType::class, [
                        'label' => "votre nom :",
                        'required' => true,
                        'attr' => [
                            'placeholder' => "Entrez votre nom ",
                        ],
                        'constraints' => [
                            new NotBlank([
                                'message' => "ce champs ne doit pas être vide",
                            ]),
                            ]
        
                            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
