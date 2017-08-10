<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    const AWING = 'awing';
    const BWING = 'bwing';
    const XWING = 'xwing';
    const YWING = 'ywing';
    const ZWING = 'zwing';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder
//            ->add('title', TextType::class)
////            ->add('availableFrom', DateTimeType::class)
//            ->add('email', EmailType::class)
////            ->add('description', TextareaType::class)
//            ->add('Save', SubmitType::class);

//        $builder->add('integer', IntegerType::class)
//            ->add('number', NumberType::class)
//            ->add('floater', FloatType::class)
//            ->add('money', MoneyType::class)
//            ->add('Save', SubmitType::class);

        $builder
            ->add('choice', ChoiceType::class, [
                'choices' => [
                    'A-Wing' => self::AWING,
                    'B-Wing' => self::BWING,
                    'X-Wing' => self::XWING,
                    'Y-Wing' => self::YWING,
                    'Z-Wing' => self::ZWING
                ],
                'label' => 'Optimal way to kill a tie-fighter ?',
                'preferred_choices' => function($choice, $key){
                    return substr($choice, 0,1) > "m";
                },
                'expanded' => true,
                'multiple' => true
            ])
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Product'
        ]);
    }
}