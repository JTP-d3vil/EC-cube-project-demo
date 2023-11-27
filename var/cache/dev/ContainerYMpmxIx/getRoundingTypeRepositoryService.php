<?php

namespace ContainerYMpmxIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRoundingTypeRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\Master\RoundingTypeRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\RoundingTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'RoundingTypeRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\RoundingTypeRepository'] = new \Eccube\Repository\Master\RoundingTypeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
