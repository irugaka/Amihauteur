<?php

namespace ContainerXQ4nD4M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHauteurTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\HauteurType' shared autowired service.
     *
     * @return \App\Form\HauteurType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\HauteurType'] = new \App\Form\HauteurType();
    }
}