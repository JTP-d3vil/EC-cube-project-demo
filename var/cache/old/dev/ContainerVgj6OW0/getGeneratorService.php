<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeneratorService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Tests\Fixture\Generator' shared service.
     *
     * @return \Eccube\Tests\Fixture\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Eccube\\Tests\\Fixture\\Generator'] = new \Eccube\Tests\Fixture\Generator(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Security\\Core\\Encoder\\PasswordEncoder'] ?? $container->load('getPasswordEncoderService')), ($container->privates['Eccube\\Repository\\MemberRepository'] ?? $container->load('getMemberRepositoryService')), ($container->privates['Eccube\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['Eccube\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')), ($container->privates['Eccube\\Repository\\ClassNameRepository'] ?? $container->load('getClassNameRepositoryService')), ($container->privates['Eccube\\Repository\\ClassCategoryRepository'] ?? $container->load('getClassCategoryRepositoryService')), ($container->privates['Eccube\\Repository\\DeliveryDurationRepository'] ?? $container->load('getDeliveryDurationRepositoryService')), ($container->privates['Eccube\\Repository\\DeliveryFeeRepository'] ?? $container->load('getDeliveryFeeRepositoryService')), ($container->privates['Eccube\\Repository\\PaymentRepository'] ?? $container->load('getPaymentRepositoryService')), ($container->privates['Eccube\\Repository\\PageRepository'] ?? $container->getPageRepositoryService()), ($container->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $container->load('getPrefRepositoryService')), ($container->privates['Eccube\\Repository\\TagRepository'] ?? $container->load('getTagRepositoryService')), ($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? $container->getTaxRuleRepositoryService()), ($container->privates['eccube.purchase.flow.order'] ?? $container->load('getEccube_Purchase_Flow_OrderService')), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), 'ja_JP');
    }
}