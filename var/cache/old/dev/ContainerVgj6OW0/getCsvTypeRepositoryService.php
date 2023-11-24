<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvTypeRepositoryService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Repository\Master\CsvTypeRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\CsvTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'CsvTypeRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\CsvTypeRepository'] = new \Eccube\Repository\Master\CsvTypeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
