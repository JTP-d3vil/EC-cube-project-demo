<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNonMemberShoppingControllerService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the public 'Eccube\Controller\NonMemberShoppingController' shared autowired service.
     *
     * @return \Eccube\Controller\NonMemberShoppingController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractShoppingController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'NonMemberShoppingController.php';

        $container->services['Eccube\\Controller\\NonMemberShoppingController'] = $instance = new \Eccube\Controller\NonMemberShoppingController(($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()), ($container->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $container->load('getPrefRepositoryService')), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')), ($container->privates['Eccube\\Service\\CartService'] ?? $container->getCartServiceService()));

        $instance->setPurchaseFlow(($container->privates['eccube.purchase.flow.shopping'] ?? $container->load('getEccube_Purchase_Flow_ShoppingService')));
        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.l8Il0Lu'] ?? $container->load('get_ServiceLocator_L8Il0LuService'))->withContext('Eccube\\Controller\\NonMemberShoppingController', $container));

        return $instance;
    }
}
