<?php
namespace ScalofrioBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cliente')
            ->add('establecimientos')
            ->add('username')
            ->add('password', 'password', array(
                'required' => false,
            ))
            ->add('role', 'choice', array('choices' => array('ROLE_ADMIN' => 'Administrador','ROLE_COMERCIAL' => 'Comercial', 'ROLE_USER' => 'Usuario'), 'placeholder' => 'Selecciona un role'))
            ->add('isActive', 'checkbox', array(
                'required' => false,
            ))
            ->add('comercial')
            ->add('guardar', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ScalofrioBundle\Entity\Usuarios'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'username';
    }
}