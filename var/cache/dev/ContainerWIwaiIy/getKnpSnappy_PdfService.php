<?php

namespace ContainerWIwaiIy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpSnappy_PdfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knp_snappy.pdf' shared service.
     *
     * @return \Knp\Snappy\Pdf
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'Pdf.php';

        $container->services['knp_snappy.pdf'] = $instance = new \Knp\Snappy\Pdf('"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe"', $container->parameters['knp_snappy.pdf.options'], []);

        $instance->setLogger(($container->privates['monolog.logger.snappy'] ?? $container->load('getMonolog_Logger_SnappyService')));

        return $instance;
    }
}
