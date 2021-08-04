<?php

namespace ContainerWIwaiIy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DYUFF7BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dYUFF7B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dYUFF7B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\DefaultController::index' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\DefaultController::toPdfAction' => ['privates', '.service_locator.8VP1xID', 'get_ServiceLocator_8VP1xIDService', true],
            'App\\Controller\\DefaultController::toPdfActionIncruste' => ['privates', '.service_locator.8VP1xID', 'get_ServiceLocator_8VP1xIDService', true],
            'App\\Controller\\DefaultController::toPdfActionLegend' => ['privates', '.service_locator.8VP1xID', 'get_ServiceLocator_8VP1xIDService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\DefaultController:index' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\DefaultController:toPdfAction' => ['privates', '.service_locator.8VP1xID', 'get_ServiceLocator_8VP1xIDService', true],
            'App\\Controller\\DefaultController:toPdfActionIncruste' => ['privates', '.service_locator.8VP1xID', 'get_ServiceLocator_8VP1xIDService', true],
            'App\\Controller\\DefaultController:toPdfActionLegend' => ['privates', '.service_locator.8VP1xID', 'get_ServiceLocator_8VP1xIDService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\DefaultController::index' => '?',
            'App\\Controller\\DefaultController::toPdfAction' => '?',
            'App\\Controller\\DefaultController::toPdfActionIncruste' => '?',
            'App\\Controller\\DefaultController::toPdfActionLegend' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\DefaultController:index' => '?',
            'App\\Controller\\DefaultController:toPdfAction' => '?',
            'App\\Controller\\DefaultController:toPdfActionIncruste' => '?',
            'App\\Controller\\DefaultController:toPdfActionLegend' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
