<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DR5jARHService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.DR5jARH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DR5jARH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Template' => ['privates', '.errored..service_locator.DR5jARH.Eccube\\Entity\\Template', NULL, 'Cannot autowire service ".service_locator.DR5jARH": it references class "Eccube\\Entity\\Template" but no such service exists.'],
        ], [
            'Template' => 'Eccube\\Entity\\Template',
        ]);
    }
}
