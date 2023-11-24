<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxRuleEventSubscriberService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Doctrine\EventSubscriber\TaxRuleEventSubscriber' shared autowired service.
     *
     * @return \Eccube\Doctrine\EventSubscriber\TaxRuleEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'TaxRuleEventSubscriber.php';

        return $container->privates['Eccube\\Doctrine\\EventSubscriber\\TaxRuleEventSubscriber'] = new \Eccube\Doctrine\EventSubscriber\TaxRuleEventSubscriber($container);
    }
}
