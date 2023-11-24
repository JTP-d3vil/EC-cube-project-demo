<?php

namespace ContainerBjUAxOf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z1DMbeMService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z1DMbeM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z1DMbeM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
            'router' => '?',
        ]);
    }
}
