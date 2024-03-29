<?php

namespace ContainerHLbnio5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductReviewConfigRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\ProductReview42\Repository\ProductReviewConfigRepository' shared autowired service.
     *
     * @return \Plugin\ProductReview42\Repository\ProductReviewConfigRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'ProductReview42'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ProductReviewConfigRepository.php';

        return $container->privates['Plugin\\ProductReview42\\Repository\\ProductReviewConfigRepository'] = new \Plugin\ProductReview42\Repository\ProductReviewConfigRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
