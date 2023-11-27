<?php

namespace ContainerYMpmxIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCategoryRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\ProductCategoryRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ProductCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ProductCategoryRepository.php';

        return $container->privates['Eccube\\Repository\\ProductCategoryRepository'] = new \Eccube\Repository\ProductCategoryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
