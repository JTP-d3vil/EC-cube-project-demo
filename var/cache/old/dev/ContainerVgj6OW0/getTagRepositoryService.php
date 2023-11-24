<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\TagRepository' shared autowired service.
     *
     * @return \Eccube\Repository\TagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'TagRepository.php';

        return $container->privates['Eccube\\Repository\\TagRepository'] = new \Eccube\Repository\TagRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
