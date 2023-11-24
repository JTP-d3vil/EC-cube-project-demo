<?php

namespace ContainerBjUAxOf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OUrBKUEService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OUrBKUE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OUrBKUE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartPurchaseFlow' => ['privates', 'eccube.purchase.flow.cart', 'getEccube_Purchase_Flow_CartService', true],
        ], [
            'cartPurchaseFlow' => '?',
        ]);
    }
}
