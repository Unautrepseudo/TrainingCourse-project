<?php

namespace App\Form;

use App\Entity\Artisan;
use App\Entity\Customer;
use App\Entity\Product;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                     'Meubles' => 'meubles',
                     'Decoration' => 'decoration',
                     'Bijoux' => 'bijoux',
                     'Jouets' => 'jouets',
                 ],
          ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                     'Tables' => 'tables',
                     'Chaises' => 'chaises',
                     'Bureaux' => 'bureaux',
                     'Etageres' => 'etageres',
                     'Armoires' => 'armoires',
                     'Poteries' => 'poteries',
                     'Luminaires' => 'luminaires',
                     'Murales' => 'murales',
                     'Bougies' => 'bougies',
                     'Bagues' => 'bagues',
                     'Bracelets' => 'bracelets',
                     'Colliers' => 'colliers',
                     'Tete' => 'tete',
                     'Figurines' => 'figurines',
                     'Jeux' => 'jeux',
                     'Peluches' => 'peluches',
                     'Puzzles' => 'puzzles',
                ],
            ])
            ->add('description')
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username',
            ])
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
