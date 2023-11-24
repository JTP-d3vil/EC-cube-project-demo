<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxProcessorService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Service\PurchaseFlow\Processor\TaxProcessor' shared autowired service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\TaxProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'ItemHolderPreprocessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'TaxProcessor.php';

        return $container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\TaxProcessor'] = new \Eccube\Service\PurchaseFlow\Processor\TaxProcessor(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? $container->getTaxRuleRepositoryService()), ($container->services['Eccube\\Service\\TaxRuleService'] ?? $container->load('getTaxRuleServiceService')));
    }
}
