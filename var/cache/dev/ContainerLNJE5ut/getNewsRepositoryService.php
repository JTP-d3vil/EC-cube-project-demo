<?php

namespace ContainerLNJE5ut;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\NewsRepository' shared autowired service.
     *
     * @return \Eccube\Repository\NewsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'NewsRepository.php';

        return $container->privates['Eccube\\Repository\\NewsRepository'] = new \Eccube\Repository\NewsRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
