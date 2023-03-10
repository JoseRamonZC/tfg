<?php

namespace ContainerScqAvDQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0s_JFW9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0s.jFW9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0s.jFW9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'almacen' => ['privates', '.errored..service_locator.0s.jFW9.App\\Entity\\Almacen', NULL, 'Cannot autowire service ".service_locator.0s.jFW9": it references class "App\\Entity\\Almacen" but no such service exists.'],
            'importacion' => ['privates', '.errored..service_locator.0s.jFW9.App\\Entity\\Importacion', NULL, 'Cannot autowire service ".service_locator.0s.jFW9": it references class "App\\Entity\\Importacion" but no such service exists.'],
            'importacionLote' => ['privates', '.errored..service_locator.0s.jFW9.App\\Entity\\ImportacionLote', NULL, 'Cannot autowire service ".service_locator.0s.jFW9": it references class "App\\Entity\\ImportacionLote" but no such service exists.'],
            'usuario' => ['privates', '.errored..service_locator.0s.jFW9.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.0s.jFW9": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'almacen' => 'App\\Entity\\Almacen',
            'importacion' => 'App\\Entity\\Importacion',
            'importacionLote' => 'App\\Entity\\ImportacionLote',
            'usuario' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
