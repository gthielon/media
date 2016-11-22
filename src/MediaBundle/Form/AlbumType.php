<?php

namespace MediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class AlbumType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreAlbum')
            ->add('artiste')
            ->add('genre', ChoiceType::class, array(
                'choice_list' => new ChoiceList(
                    array('Soul', 'Hip-Hop', 'Rock'),
                    array('Soul', 'Hip-Hop', 'Rock')
                )))

            ->add('support', ChoiceType::class, array(
                'choice_list' => new ChoiceList(
                    array('Vynil', 'CD', 'Cassette'),
                    array('Vynil', 'CD', 'Cassette')
                )
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MediaBundle\Entity\Album'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mediabundle_album';
    }


}
