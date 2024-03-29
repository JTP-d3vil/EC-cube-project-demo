<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M6zkjFcService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.M6zkjFc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M6zkjFc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'composerApiService' => ['services', 'Eccube\\Service\\Composer\\ComposerApiService', 'getComposerApiServiceService', true],
            'dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'composerApiService' => 'Eccube\\Service\\Composer\\ComposerApiService',
            'dispatcher' => '?',
        ]);
    }
}
