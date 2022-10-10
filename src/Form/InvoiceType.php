<?php

namespace App\Form;

use App\Entity\Invoice;
use Doctrine\ORM\Query\Expr\Func;
use phpDocumentor\Reflection\Types\Void_;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Contracts\Translation\TranslatorInterface;

class InvoiceType extends AbstractType
{
    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        

        $builder
            ->add('name', TextType::class, [
                'label' => 'nom',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrer votre nom',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => "Vous devez entrer votre nom",
                    ])
                    ],
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrer votre prénom',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous devez entrer votre prénom',
                    ])
                    ],
            ])
            ->add('adress', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrer votre adresse'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre adresse de livraison',
                    ])
                    ],
            ])
            ->add('postCode', TextType::class, [
                'label' => 'Code Postal',
                'required' => true,
                'attr' => [
                    'placeholder' => ' Entrer votre code postal',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre code postal',
                    ])
                    ],
            ])
            ->add('town', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrer votre ville',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer la ville',
                    ])
                    ],
            ])
            ->add('country', TextType::class, [
                'label' => 'Pays',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrer le pays',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'veuillez entrer le pays de livraison '
                    ])
                    ],
                ])
                ->add('valider', SubmitType::class);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
