<?php

namespace App\Form;

use App\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('pseudo')
            ->add('gender', ChoiceType::class, [
                'choices' => [
                     'Male' => 'male',
                     'Female' => 'female',
                 ],
          ])
            ->add('email')
            ->add('password')
            ->add('birthday')
            ->add('address')
            ->add('city')
            ->add('zip_code')
            ->add('phone_number')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
        ]);
    }
}
