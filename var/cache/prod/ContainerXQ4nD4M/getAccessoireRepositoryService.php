<?php

namespace ContainerXQ4nD4M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccessoireRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AccessoireRepository' shared autowired service.
     *
     * @return \App\Repository\AccessoireRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AccessoireRepository'] = new \App\Repository\AccessoireRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}