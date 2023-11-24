<?php

namespace ContainerVgj6OW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchemaServiceService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Service\SchemaService' shared autowired service.
     *
     * @return \Eccube\Service\SchemaService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SchemaService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['Eccube\\Service\\SchemaService'])) {
            return $container->privates['Eccube\\Service\\SchemaService'];
        }

        return $container->privates['Eccube\\Service\\SchemaService'] = new \Eccube\Service\SchemaService($a, ($container->privates['Eccube\\Service\\PluginContext'] ?? $container->load('getPluginContextService')));
    }
}
