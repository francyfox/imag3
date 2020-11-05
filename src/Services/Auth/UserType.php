<?php


namespace App\Services;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class, [
            'row_attr' => ['class' => 'uk-margin uk-inline uk-width-1-1 '],
            'label_attr' => ['class' => 'uk-form-icon', 'uk-icon' => 'icon: user'],
            'attr' => ['class' => 'uk-input uk-form-large', 'placeholder' => 'Set Username']
        ]);
        $builder->add('password', RepeatedType::class, [
            'options' => ['attr' =>
                ['class' => 'uk-input uk-form-large', 'placeholder' => 'Set Password'],
                'row_attr' => ['class' => 'uk-inline uk-width-1-1 '],
                'label_attr' => ['class' => 'uk-form-icon', 'uk-icon' => 'icon: lock'],
            ],
            'first_name' => 'password',
            'second_name' => 'confirm',
            'type' => PasswordType::class,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}