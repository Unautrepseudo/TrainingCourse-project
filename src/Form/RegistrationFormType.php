<?php

namespace App\Form;

use App\Entity\Artisan;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $r = $_SERVER['REQUEST_URI']; 
        $r = explode('/', $r);
        $r = array_filter($r);
        $r = array_merge($r, array()); 
        $r = preg_replace('/\?.*/', '', $r);

    $endofurl = $r[3];

        $builder
        ->add('last_name')
        ->add('address')
        ->add('city')
        ->add('zip_code')
        ->add('phone_number');
        
        if($endofurl == 'artisan') 
        {
            
        $builder
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
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
        
}








    


