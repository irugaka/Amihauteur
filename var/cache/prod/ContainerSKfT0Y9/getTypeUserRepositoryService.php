<?php

namespace ContainerSKfT0Y9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeUserRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TypeUserRepository' shared autowired service.
     *
     * @return \App\Repository\TypeUserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypeUserRepository'] = new \App\Repository\TypeUserRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}