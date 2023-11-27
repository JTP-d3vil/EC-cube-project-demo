<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginHistoryStatusRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\LoginHistoryStatusRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\LoginHistoryStatusRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'LoginHistoryStatusRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\LoginHistoryStatusRepository'] = new \Eccube\Repository\Master\LoginHistoryStatusRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
