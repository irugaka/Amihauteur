<?php

namespace ContainerXQ4nD4M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPalierRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PalierRepository' shared autowired service.
     *
     * @return \App\Repository\PalierRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PalierRepository'] = new \App\Repository\PalierRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
