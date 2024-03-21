<?php

namespace App\Form;

use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
            ->add(
                'email',
                TextType::class,
                [
                    'label' => 'Correo electrónico',
                    'required' => true
                ]
            )
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Porfavor introduzca una contraseña',
                    ]),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Tu contraseña debe tener una longitud mínima de {{ limit }} carácteres',
                        // max length allowed by Symfony for security reasons
                        'max' => 40,
                    ]),
                ],
            ])
            ->add(
                'nombre',
                TextType::class,
                [
                    'label' => 'Nombre',
                    'required' => true
                ]
            )
            ->add(
                'apellidos',
                TextType::class,
                [
                    'label' => 'Apellidos',
                    'required' => true
                ]
            )
            ->add(
                'codigoPostal',
                TextType::class,
                [
                    'label' => 'Código postal',
                    'required' => false
                ]
            )
            ->add(
                'calle',
                TextType::class,
                [
                    'label' => 'Calle',
                    'required' => false
                ]
            )
            ->add(
                'ciudad',
                TextType::class,
                [
                    'label' => 'Ciudad',
                    'required' => false
                ]
            )
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
        ]);
    }
}
