<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSensioFrameworkExtra_Routing_Loader_AnnotDirService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'sensio_framework_extra.routing.loader.annot_dir' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader
     *
     * @deprecated Since sensio/framework-extra-bundle 5.2: The "sensio_framework_extra.routing.loader.annot_dir" service is deprecated since version 5.2
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('sensio/framework-extra-bundle', '5.2', 'The "sensio_framework_extra.routing.loader.annot_dir" service is deprecated since version 5.2');

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'FileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'FileLocator.php';

        return new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader(($container->privates['file_locator'] ?? ($container->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1))))), ($container->privates['sensio_framework_extra.routing.loader.annot_class'] ?? $container->load('getSensioFrameworkExtra_Routing_Loader_AnnotClassService')));
    }
}
