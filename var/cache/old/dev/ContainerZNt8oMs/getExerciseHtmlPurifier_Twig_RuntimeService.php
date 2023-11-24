<?php

namespace ContainerZNt8oMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_Twig_RuntimeService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'exercise_html_purifier.twig.runtime' shared service.
     *
     * @return \Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'HTMLPurifierRuntime.php';

        return $container->privates['exercise_html_purifier.twig.runtime'] = new \Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime(($container->privates['exercise_html_purifier.purifiers_registry'] ?? $container->load('getExerciseHtmlPurifier_PurifiersRegistryService')));
    }
}
