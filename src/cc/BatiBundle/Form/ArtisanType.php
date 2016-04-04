<?php

namespace cc\BatiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArtisanType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom'))
            ->add('prenom', 'text', array('label' => 'Prénom'))
            ->add('dateNaissance', 'birthday', array('label' => 'Date de naissance'))
            ->add('villeNaissance', 'text', array('label' => 'Ville de naissance'))
            ->add('paysNaissance', 'country', array('label' => 'Pays de naissance'))
            ->add('telephone', 'text', array('label' => 'Téléphone'))
            ->add('adresse', 'text', array('label' => 'Adresse'))
            //->add('affectation')
            //->add('login')
            //->add('mdp')
            ->add('corpsMetier', 'entity', array(
                'class' => 'ccBatiBundle:CorpsMetier',
                'choice_label' => 'nom',
                'label' => 'Corps de métier'
            ))
            //->add('missions')
            ->add('valider','submit')
            ->add('annuler', 'reset')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'cc\BatiBundle\Entity\Artisan'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cc_batibundle_artisan';
    }
}
