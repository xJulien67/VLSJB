<?php

namespace App\Form;

use App\Entity\Activity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class ActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::Class,
                array(
                    'widget' => 'single_text',
                )
            )
            ->add('distance')
            ->add('duration', TimeType::Class, [
                "with_seconds" => true,
                "hours" => range(0, 5),
            ])
            ->add('place')
            ->add('partner')
            ->add('averagePace', TimeType::Class, [
                "with_seconds" => true,
                "minutes" => range(2, 10),
                "hours" => range(0,0),
            ])
            ->add('averageSpeed')
            ->add('heartRate')
            ->add('sport')
            ->add('activitytype')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Activity::class,
        ]);
    }
}
