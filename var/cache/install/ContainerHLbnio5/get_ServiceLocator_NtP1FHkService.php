<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NtP1FHkService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.NtP1FHk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NtP1FHk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Shipping' => ['privates', '.errored..service_locator.NtP1FHk.Eccube\\Entity\\Shipping', NULL, 'Cannot autowire service ".service_locator.NtP1FHk": it references class "Eccube\\Entity\\Shipping" but no such service exists.'],
        ], [
            'Shipping' => 'Eccube\\Entity\\Shipping',
        ]);
    }
}
