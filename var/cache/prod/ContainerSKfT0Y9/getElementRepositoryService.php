<?php

namespace ContainerSKfT0Y9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getElementRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ElementRepository' shared autowired service.
     *
     * @return \App\Repository\ElementRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ElementRepository'] = new \App\Repository\ElementRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}