<?php

namespace ContainerScqAvDQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGedmo_Listener_SortableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'gedmo.listener.sortable' shared service.
     *
     * @return \Gedmo\Sortable\SortableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gedmo'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Sortable'.\DIRECTORY_SEPARATOR.'SortableListener.php';

        $container->privates['gedmo.listener.sortable'] = $instance = new \Gedmo\Sortable\SortableListener();

        $instance->setAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));

        return $instance;
    }
}
