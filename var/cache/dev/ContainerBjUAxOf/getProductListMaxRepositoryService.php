<?php

namespace ContainerBjUAxOf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductListMaxRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\Master\ProductListMaxRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\ProductListMaxRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'ProductListMaxRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\ProductListMaxRepository'] = new \Eccube\Repository\Master\ProductListMaxRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
