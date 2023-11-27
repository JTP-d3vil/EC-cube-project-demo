<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxTypeRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\TaxTypeRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\TaxTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'TaxTypeRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\TaxTypeRepository'] = new \Eccube\Repository\Master\TaxTypeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
