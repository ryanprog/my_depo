<?php

namespace App\Form;

use App\Entity\Competences2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Competences2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('competence1')
            ->add('competence2')
            ->add('competence3')
            ->add('competence4')
            ->add('competence5')
            ->add('competence6')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Competences2::class,
        ]);
    }
}
