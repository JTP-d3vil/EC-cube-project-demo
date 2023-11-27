<?php

namespace ContainerYMpmxIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOwnerStoreControllerService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the public 'Eccube\Controller\Admin\Store\OwnerStoreController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Store\OwnerStoreController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'OwnerStoreController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'CacheUtil.php';

        $container->services['Eccube\\Controller\\Admin\\Store\\OwnerStoreController'] = $instance = new \Eccube\Controller\Admin\Store\OwnerStoreController(($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->getPluginRepositoryService()), ($container->services['Eccube\\Service\\PluginService'] ?? $container->load('getPluginServiceService')), ($container->privates['Eccube\\Service\\Composer\\ComposerServiceInterface'] ?? $container->load('getComposerServiceInterfaceService')), ($container->services['Eccube\\Service\\SystemService'] ?? $container->getSystemServiceService()), ($container->privates['Eccube\\Service\\PluginApiService'] ?? $container->load('getPluginApiServiceService')), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()), ($container->privates['Eccube\\Util\\CacheUtil'] ?? ($container->privates['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(($container->services['kernel'] ?? $container->get('kernel', 1)), $container))));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.GK2uivj'] ?? $container->load('get_ServiceLocator_GK2uivjService'))->withContext('Eccube\\Controller\\Admin\\Store\\OwnerStoreController', $container));

        return $instance;
    }
}