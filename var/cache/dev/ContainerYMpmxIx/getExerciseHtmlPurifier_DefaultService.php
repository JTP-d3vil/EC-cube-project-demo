<?php

namespace ContainerYMpmxIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_DefaultService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'exercise_html_purifier.default' shared service.
     *
     * @return \HTMLPurifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ezyang'.\DIRECTORY_SEPARATOR.'htmlpurifier'.\DIRECTORY_SEPARATOR.'library'.\DIRECTORY_SEPARATOR.'HTMLPurifier.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ezyang'.\DIRECTORY_SEPARATOR.'htmlpurifier'.\DIRECTORY_SEPARATOR.'library'.\DIRECTORY_SEPARATOR.'HTMLPurifier'.\DIRECTORY_SEPARATOR.'Config.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HTMLPurifierConfigFactory.php';

        return $container->privates['exercise_html_purifier.default'] = new \HTMLPurifier(\Exercise\HTMLPurifierBundle\HTMLPurifierConfigFactory::create('default', ['Cache.SerializerPath' => ($container->targetDir.''.'/htmlpurifier')], NULL, [], [], [], []));
    }
}
