<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C7PUGhqService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C7PUGhq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C7PUGhq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Tag' => ['privates', '.errored..service_locator.C7PUGhq.Eccube\\Entity\\Tag', NULL, 'Cannot autowire service ".service_locator.C7PUGhq": it references class "Eccube\\Entity\\Tag" but no such service exists.'],
        ], [
            'Tag' => 'Eccube\\Entity\\Tag',
        ]);
    }
}