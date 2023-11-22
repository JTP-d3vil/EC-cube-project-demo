<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ook_RkdService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.ook.rkd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ook.rkd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
            'router' => ['services', 'router', 'getRouterService', false],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
            'router' => '?',
            'twig' => '?',
        ]);
    }
}
