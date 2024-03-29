<?php

namespace ContainerLNJE5ut;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrefRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\Master\PrefRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\PrefRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'PrefRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\PrefRepository'] = new \Eccube\Repository\Master\PrefRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
