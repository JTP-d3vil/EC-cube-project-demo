<?php

namespace ContainerZNt8oMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointHelperService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Service\PointHelper' shared autowired service.
     *
     * @return \Eccube\Service\PointHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PointHelper.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['Eccube\\Service\\PointHelper'])) {
            return $container->privates['Eccube\\Service\\PointHelper'];
        }

        return $container->privates['Eccube\\Service\\PointHelper'] = new \Eccube\Service\PointHelper(($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()), $a);
    }
}
