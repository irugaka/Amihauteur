<?php

namespace ContainerSKfT0Y9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ConfigType' shared autowired service.
     *
     * @return \App\Form\ConfigType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ConfigType'] = new \App\Form\ConfigType();
    }
}
