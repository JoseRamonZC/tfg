<?php

namespace ContainerHf6At7N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlameableListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Gedmo\Blameable\BlameableListener' shared service.
     *
     * @return \Gedmo\Blameable\BlameableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gedmo'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AbstractTrackingListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gedmo'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Blameable'.\DIRECTORY_SEPARATOR.'BlameableListener.php';

        $container->privates['Gedmo\\Blameable\\BlameableListener'] = $instance = new \Gedmo\Blameable\BlameableListener();

        $instance->setAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));

        return $instance;
    }
}
