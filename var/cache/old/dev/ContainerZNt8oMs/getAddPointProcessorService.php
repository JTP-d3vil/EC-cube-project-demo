<?php

namespace ContainerZNt8oMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddPointProcessorService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Service\PurchaseFlow\Processor\AddPointProcessor' shared autowired service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\AddPointProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'ItemHolderPostValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'AddPointProcessor.php';

        return $container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor'] = new \Eccube\Service\PurchaseFlow\Processor\AddPointProcessor(($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()));
    }
}
