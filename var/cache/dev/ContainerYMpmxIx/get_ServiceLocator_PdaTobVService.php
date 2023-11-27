<?php

namespace ContainerYMpmxIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PdaTobVService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PdaTobV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PdaTobV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tokenManager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', false],
        ], [
            'tokenManager' => '?',
        ]);
    }
}
