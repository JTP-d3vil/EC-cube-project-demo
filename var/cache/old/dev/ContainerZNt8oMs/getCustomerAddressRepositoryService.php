<?php

namespace ContainerZNt8oMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerAddressRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\CustomerAddressRepository' shared autowired service.
     *
     * @return \Eccube\Repository\CustomerAddressRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CustomerAddressRepository.php';

        return $container->privates['Eccube\\Repository\\CustomerAddressRepository'] = new \Eccube\Repository\CustomerAddressRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
