<?php

namespace ContainerWv2T53S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\AccessoireType', 1 => 'App\\Form\\AccessoireType2Type', 2 => 'App\\Form\\AjoutAccessoireType', 3 => 'App\\Form\\AjoutEntreeType', 4 => 'App\\Form\\AjoutSortieType', 5 => 'App\\Form\\AjoutTypeEchelleType', 6 => 'App\\Form\\ChangementVoleeType', 7 => 'App\\Form\\ConfigType', 8 => 'App\\Form\\EchelleFixationType2Type', 9 => 'App\\Form\\EchelleType', 10 => 'App\\Form\\EntreeType', 11 => 'App\\Form\\FixationCollectionFormType', 12 => 'App\\Form\\FixationType', 13 => 'App\\Form\\HauteurType', 14 => 'App\\Form\\NormeType', 15 => 'App\\Form\\RegistrationFormType', 16 => 'App\\Form\\SortieType', 17 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 18 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 19 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 20 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 21 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }
}
