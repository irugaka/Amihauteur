<?php

namespace ContainerSKfT0Y9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEchelleFixationType2TypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\EchelleFixationType2Type' shared autowired service.
     *
     * @return \App\Form\EchelleFixationType2Type
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EchelleFixationType2Type'] = new \App\Form\EchelleFixationType2Type();
    }
}
