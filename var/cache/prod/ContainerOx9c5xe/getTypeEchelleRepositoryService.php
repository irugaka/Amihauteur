<?php

namespace ContainerOx9c5xe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeEchelleRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TypeEchelleRepository' shared autowired service.
     *
     * @return \App\Repository\TypeEchelleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypeEchelleRepository'] = new \App\Repository\TypeEchelleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}