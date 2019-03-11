<?php

namespace App\Form;

use App\Entity\Experiences;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Experiences1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Date')
            ->add('lieu')
            ->add('Secteur')
            ->add('Name')
            ->add('experience1')
            ->add('experience2')
            ->add('Experience3')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Experiences::class,
        ]);
    }
}
