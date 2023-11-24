<?php

namespace ContainerBjUAxOf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginSchemaUpdateCommandService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Command\PluginSchemaUpdateCommand' shared autowired service.
     *
     * @return \Eccube\Command\PluginSchemaUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'PluginCommandTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'PluginSchemaUpdateCommand.php';

        $container->privates['Eccube\\Command\\PluginSchemaUpdateCommand'] = $instance = new \Eccube\Command\PluginSchemaUpdateCommand();

        $instance->setPluginService(($container->services['Eccube\\Service\\PluginService'] ?? $container->load('getPluginServiceService')));
        $instance->setPluginRepository(($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->getPluginRepositoryService()));
        $instance->setName('eccube:plugin:schema-update');

        return $instance;
    }
}
