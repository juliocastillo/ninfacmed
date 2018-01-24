<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MenuAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('texto')
            ->add('ruta')
            ->add('nivel')
            ->add('activo')
            ->add('idSistema')
            ->add('orden')
            ->add('textoNivelPadre')
            ->add('icono')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('texto')
            ->add('ruta')
            ->add('nivel')
            ->add('activo')
            ->add('idSistema')
            ->add('orden')
            ->add('textoNivelPadre')
            ->add('icono')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('texto')
            ->add('ruta')
            ->add('nivel')
            ->add('activo')
            ->add('idSistema')
            ->add('orden')
            ->add('textoNivelPadre')
            ->add('icono')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('texto')
            ->add('ruta')
            ->add('nivel')
            ->add('activo')
            ->add('idSistema')
            ->add('orden')
            ->add('textoNivelPadre')
            ->add('icono')
        ;
    }
}
