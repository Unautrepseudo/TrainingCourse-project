<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('reference')
            ->add('price')
            ->add('materials')
            ->add('stock')
            ->add('description')
            ->add('artisan')
            ->add('customer')
            ->add('imageFile', VichImageType::class, array(
                'required' => true,
                'allow_delete' => true,
                'download_uri' => true,
                'image_uri' => true,
                'label' => 'Image *'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
