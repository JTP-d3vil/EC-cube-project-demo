<?php

namespace ContainerZNt8oMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DTPwDMrService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DTPwDMr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DTPwDMr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'TargetPayment' => ['privates', '.errored..service_locator.DTPwDMr.Eccube\\Entity\\Payment', NULL, 'Cannot autowire service ".service_locator.DTPwDMr": it references class "Eccube\\Entity\\Payment" but no such service exists.'],
        ], [
            'TargetPayment' => 'Eccube\\Entity\\Payment',
        ]);
    }
}
