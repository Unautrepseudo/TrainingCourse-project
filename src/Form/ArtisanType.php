<?php

namespace App\Form;

use App\Entity\Artisan;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ArtisanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('last_name')

            ->add('address')
            ->add('city')
            ->add('zip_code')
            ->add('company')
            ->add('email')

            ->add('city')
            ->add('company')
            ->add('speciality')
            ->add('about')
            ->add('imageFile', VichImageType::class, array(
                'required' => true,
                'allow_delete' => true,
                'download_uri' => true,
                'image_uri' => true,
                'label' => 'Image *'
            ))
        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Artisan::class,
        ]);
    }
}
