<?php

namespace ContainerSKfT0Y9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCoupeEchelleEchelleRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CoupeEchelleEchelleRepository' shared autowired service.
     *
     * @return \App\Repository\CoupeEchelleEchelleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CoupeEchelleEchelleRepository'] = new \App\Repository\CoupeEchelleEchelleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
