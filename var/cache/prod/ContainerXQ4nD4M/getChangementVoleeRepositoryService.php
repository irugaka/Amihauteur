<?php

namespace ContainerXQ4nD4M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangementVoleeRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ChangementVoleeRepository' shared autowired service.
     *
     * @return \App\Repository\ChangementVoleeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ChangementVoleeRepository'] = new \App\Repository\ChangementVoleeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
