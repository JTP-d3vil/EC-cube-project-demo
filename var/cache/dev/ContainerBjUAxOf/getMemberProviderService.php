<?php

namespace ContainerBjUAxOf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMemberProviderService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Security\Core\User\MemberProvider' shared autowired service.
     *
     * @return \Eccube\Security\Core\User\MemberProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'MemberProvider.php';

        return $container->privates['Eccube\\Security\\Core\\User\\MemberProvider'] = new \Eccube\Security\Core\User\MemberProvider(($container->privates['Eccube\\Repository\\MemberRepository'] ?? $container->load('getMemberRepositoryService')));
    }
}
