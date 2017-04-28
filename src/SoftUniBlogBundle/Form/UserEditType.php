<?php

namespace SoftUniBlogBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;


class UserEditType extends UserType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('roles', ChoiceType::class,[
            'choices'=>[
             //   'HeadAmin' => 'ROLE_HEADADMIN',
                'Admin'=> 'ROLE_ADMIN',
              //  'Editor' => 'ROLE_EDITOR',
                'User' => 'ROLE_USER',
            ],
            'expanded'=>true,
            'multiple'=>true,
        ]);
    }
}
