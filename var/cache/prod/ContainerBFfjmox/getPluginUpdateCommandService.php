<?php

namespace ContainerBFfjmox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginUpdateCommandService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Command\PluginUpdateCommand' shared autowired service.
     *
     * @return \Eccube\Command\PluginUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'PluginCommandTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'PluginUpdateCommand.php';

        $container->privates['Eccube\\Command\\PluginUpdateCommand'] = $instance = new \Eccube\Command\PluginUpdateCommand();

        $instance->setPluginService(($container->services['Eccube\\Service\\PluginService'] ?? $container->load('getPluginServiceService')));
        $instance->setPluginRepository(($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->load('getPluginRepositoryService')));
        $instance->setName('eccube:plugin:update');

        return $instance;
    }
}
