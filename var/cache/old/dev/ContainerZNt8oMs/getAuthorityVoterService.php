<?php

namespace ContainerZNt8oMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorityVoterService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.Eccube\Security\Voter\AuthorityVoter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'VoterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'CacheableVoterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'TraceableVoter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'AuthorityVoter.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['debug.security.voter.Eccube\\Security\\Voter\\AuthorityVoter'])) {
            return $container->privates['debug.security.voter.Eccube\\Security\\Voter\\AuthorityVoter'];
        }

        return $container->privates['debug.security.voter.Eccube\\Security\\Voter\\AuthorityVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Eccube\Security\Voter\AuthorityVoter(($container->privates['Eccube\\Repository\\AuthorityRoleRepository'] ?? $container->getAuthorityRoleRepositoryService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container)))), $a);
    }
}
