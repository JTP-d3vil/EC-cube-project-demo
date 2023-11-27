<?php

namespace ContainerBFfjmox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EAZ72qxService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.eAZ72qx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eAZ72qx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Block' => ['privates', '.errored..service_locator.eAZ72qx.Eccube\\Entity\\Block', NULL, 'Cannot autowire service ".service_locator.eAZ72qx": it references class "Eccube\\Entity\\Block" but no such service exists.'],
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
            'fs' => ['services', '.container.private.filesystem', 'get_Container_Private_FilesystemService', true],
        ], [
            'Block' => 'Eccube\\Entity\\Block',
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
            'fs' => '?',
        ]);
    }
}
