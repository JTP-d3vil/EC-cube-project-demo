<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentOptionRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\PaymentOptionRepository' shared autowired service.
     *
     * @return \Eccube\Repository\PaymentOptionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PaymentOptionRepository.php';

        return $container->privates['Eccube\\Repository\\PaymentOptionRepository'] = new \Eccube\Repository\PaymentOptionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
