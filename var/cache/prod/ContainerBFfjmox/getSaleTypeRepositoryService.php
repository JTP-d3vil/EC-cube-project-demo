<?php

namespace ContainerBFfjmox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaleTypeRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\SaleTypeRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\SaleTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'SaleTypeRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\SaleTypeRepository'] = new \Eccube\Repository\Master\SaleTypeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
