<?php

namespace ContainerSKfT0Y9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAjoutEntreeTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\AjoutEntreeType' shared autowired service.
     *
     * @return \App\Form\AjoutEntreeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\AjoutEntreeType'] = new \App\Form\AjoutEntreeType();
    }
}