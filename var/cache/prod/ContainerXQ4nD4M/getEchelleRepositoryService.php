<?php

namespace ContainerXQ4nD4M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEchelleRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\EchelleRepository' shared autowired service.
     *
     * @return \App\Repository\EchelleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\EchelleRepository'] = new \App\Repository\EchelleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
