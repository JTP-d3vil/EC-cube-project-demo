<?php

namespace ContainerYMpmxIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLimiter_ShoppingCheckoutIpService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'limiter.shopping_checkout_ip' shared service.
     *
     * @return \Symfony\Component\RateLimiter\RateLimiterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'rate-limiter'.\DIRECTORY_SEPARATOR.'RateLimiterFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'rate-limiter'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'StorageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'rate-limiter'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'CacheStorage.php';

        return $container->privates['limiter.shopping_checkout_ip'] = new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 1024, 'interval' => '30 minutes', 'id' => 'shopping_checkout_ip'], new \Symfony\Component\RateLimiter\Storage\CacheStorage(($container->privates['rate_limiter.cache'] ?? $container->getRateLimiter_CacheService())), ($container->privates['lock.default.factory'] ?? $container->load('getLock_Default_FactoryService')));
    }
}