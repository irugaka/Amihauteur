<?php

namespace ContainerXQ4nD4M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEchelleFixationRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\EchelleFixationRepository' shared autowired service.
     *
     * @return \App\Repository\EchelleFixationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\EchelleFixationRepository'] = new \App\Repository\EchelleFixationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}