<?php

// src/AppBundle/Menu/Builder.php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /*
    * Programador: Julio Castillo
    */
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');
        
        $sql = "
                SELECT *
                FROM menu
                WHERE activo = TRUE
                ORDER BY nivel,orden ASC
                "
                ;
        $stm = $this->container->get('database_connection')->prepare($sql);
        $stm->execute();
        $menu_data = $stm->fetchAll();

        foreach ($menu_data as $key => $data) {
            if ($data['nivel']==1) {
                if (empty($data['ruta'])) {
                    $menu->addChild($data['texto'], array('route' => $data['ruta']))
                        ->setAttribute('dropdown', true)
                        ->setAttribute('icon', $data['icono']);
                } else {
                    $menu->addChild($data['texto'], array('route' => $data['ruta']));
                }
            } elseif ($data['nivel']==2) {
                $menu[$data['texto_nivel_padre']]->addChild($data['texto'], array('route' => $data['ruta']));
            }
        }
        return $menu;
    }
}
