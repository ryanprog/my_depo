<?php

namespace App\Form;

use App\Entity\Experiences;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExperiencesType extends AbstractType
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
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'save'],
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Experiences::class,
        ]);
    }
}
