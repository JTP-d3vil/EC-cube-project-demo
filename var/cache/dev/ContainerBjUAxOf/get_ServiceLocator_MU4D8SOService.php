<?php

namespace ContainerBjUAxOf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MU4D8SOService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MU4D8SO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MU4D8SO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Delivery' => ['privates', '.errored..service_locator.MU4D8SO.Eccube\\Entity\\Delivery', NULL, 'Cannot autowire service ".service_locator.MU4D8SO": it references class "Eccube\\Entity\\Delivery" but no such service exists.'],
        ], [
            'Delivery' => 'Eccube\\Entity\\Delivery',
        ]);
    }
}
