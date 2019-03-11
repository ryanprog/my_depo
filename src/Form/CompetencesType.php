<?php

namespace App\Form;

use App\Entity\Competences;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompetencesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('langues')
            ->add('logiciels')
            ->add('sport')
            ->add('competence1')
            ->add('competence2')
            ->add('competence3')
            ->add('Competence4')
            ->add('competence5')
            ->add('competence6')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Competences::class,
        ]);
    }
}
