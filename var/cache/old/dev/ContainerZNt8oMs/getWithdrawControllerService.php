<?php

namespace ContainerZNt8oMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWithdrawControllerService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the public 'Eccube\Controller\Mypage\WithdrawController' shared autowired service.
     *
     * @return \Eccube\Controller\Mypage\WithdrawController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Mypage'.\DIRECTORY_SEPARATOR.'WithdrawController.php';

        $container->services['Eccube\\Controller\\Mypage\\WithdrawController'] = $instance = new \Eccube\Controller\Mypage\WithdrawController(($container->privates['Eccube\\Service\\MailService'] ?? $container->load('getMailServiceService')), ($container->privates['Eccube\\Repository\\Master\\CustomerStatusRepository'] ?? $container->load('getCustomerStatusRepositoryService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['Eccube\\Service\\CartService'] ?? $container->getCartServiceService()), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')), ($container->privates['Eccube\\Repository\\PageRepository'] ?? $container->getPageRepositoryService()));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.GK2uivj'] ?? $container->load('get_ServiceLocator_GK2uivjService'))->withContext('Eccube\\Controller\\Mypage\\WithdrawController', $container));

        return $instance;
    }
}