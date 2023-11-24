<?php

namespace ContainerZNt8oMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteCartsCommandService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Command\DeleteCartsCommand' shared autowired service.
     *
     * @return \Eccube\Command\DeleteCartsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DeleteCartsCommand.php';

        $container->privates['Eccube\\Command\\DeleteCartsCommand'] = $instance = new \Eccube\Command\DeleteCartsCommand($container, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Repository\\CartRepository'] ?? $container->getCartRepositoryService()));

        $instance->setName('eccube:delete-carts');

        return $instance;
    }
}