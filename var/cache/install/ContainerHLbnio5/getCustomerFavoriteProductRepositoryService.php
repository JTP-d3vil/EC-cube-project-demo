<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerFavoriteProductRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\CustomerFavoriteProductRepository' shared autowired service.
     *
     * @return \Eccube\Repository\CustomerFavoriteProductRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CustomerFavoriteProductRepository.php';

        return $container->privates['Eccube\\Repository\\CustomerFavoriteProductRepository'] = new \Eccube\Repository\CustomerFavoriteProductRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
