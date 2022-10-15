<?php

namespace App\Form;

use App\Entity\Annonces;
use App\Entity\Categories;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class AnnoncesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class)
            ->add('content', TextareaType::class, [
                'label' => 'desription',
                
            ])
            ->add('images', FileType::class, [
                'multiple' => false,
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '4000K',
                        'mimeTypes' => [
                            "image/jpg",
                            "image/png",
                            "image/jpg",
                            "image/jpeg",
                            "image/gif",
                        ],
                    ])
                    ],
               
                ])
           
                ->add('categories', EntityType::class,[
                    'class'=> Categories::class
                ]);

            $builder->add('price', IntegerType::class, [
                'label'=> 'Prix',
                
               
                
                
            ])

            // ->add('size', ChoiceType::class, [
            //     'choices' => [
            //         'Xl' => 'XL',
            //         'L' => 'L',
            //         'M' => 'M',
            //         'S' => 'S',
            //     ],
            //     'attr'=>[
            //         'class'=>'result-count'
            //     ]
            // ])
                
            ->add('Valider', SubmitType::class)
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annonces::class,
        ]);
    }
}
