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
        ->add('birthday')
        ->add('address')
        ->add('city')
        ->add('zip_code')
        ->add('phone_number');
        
        if($endofurl == 'artisan') 
        {
            
        $builder
        ->add('company')
        ->add('picture');
        
        ;

            
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






    


