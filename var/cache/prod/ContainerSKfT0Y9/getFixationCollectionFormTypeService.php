<?php

namespace ContainerSKfT0Y9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFixationCollectionFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\FixationCollectionFormType' shared autowired service.
     *
     * @return \App\Form\FixationCollectionFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\FixationCollectionFormType'] = new \App\Form\FixationCollectionFormType();
    }
}
