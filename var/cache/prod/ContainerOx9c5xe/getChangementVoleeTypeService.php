<?php

namespace ContainerOx9c5xe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangementVoleeTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ChangementVoleeType' shared autowired service.
     *
     * @return \App\Form\ChangementVoleeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ChangementVoleeType'] = new \App\Form\ChangementVoleeType();
    }
}
