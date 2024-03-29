<?php

namespace ContainerLNJE5ut;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JxSCSBMService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jxSCSBM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jxSCSBM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Layout' => ['privates', '.errored..service_locator.jxSCSBM.Eccube\\Entity\\Layout', NULL, 'Cannot autowire service ".service_locator.jxSCSBM": it references class "Eccube\\Entity\\Layout" but no such service exists.'],
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
        ], [
            'Layout' => 'Eccube\\Entity\\Layout',
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
        ]);
    }
}
