<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComposerInstallCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\ComposerInstallCommand' shared autowired service.
     *
     * @return \Eccube\Command\ComposerInstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ComposerInstallCommand.php';

        $container->privates['Eccube\\Command\\ComposerInstallCommand'] = $instance = new \Eccube\Command\ComposerInstallCommand(($container->services['Eccube\\Service\\Composer\\ComposerApiService'] ?? $container->load('getComposerApiServiceService')));

        $instance->setName('eccube:composer:install');

        return $instance;
    }
}
