<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FloatType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'scale' => 3,
            'attr' => [
                'step' => 0.7,
                'min' => 14,
                'max' => 70
            ]
        ]);
    }

    public function getParent()
    {
        return NumberType::class;
    }

}