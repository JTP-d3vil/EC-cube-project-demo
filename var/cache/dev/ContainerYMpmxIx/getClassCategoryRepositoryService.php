<?php

namespace ContainerYMpmxIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClassCategoryRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\ClassCategoryRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ClassCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ClassCategoryRepository.php';

        return $container->privates['Eccube\\Repository\\ClassCategoryRepository'] = new \Eccube\Repository\ClassCategoryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
