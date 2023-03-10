<?php

namespace ContainerXC2Nmui;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0jyU7IeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0jyU7Ie' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0jyU7Ie'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'almacen' => ['privates', '.errored..service_locator.0jyU7Ie.App\\Entity\\Almacen', NULL, 'Cannot autowire service ".service_locator.0jyU7Ie": it references class "App\\Entity\\Almacen" but no such service exists.'],
            'asignacion' => ['privates', '.errored..service_locator.0jyU7Ie.App\\Entity\\Asignacion', NULL, 'Cannot autowire service ".service_locator.0jyU7Ie": it references class "App\\Entity\\Asignacion" but no such service exists.'],
            'asignacionLote' => ['privates', '.errored..service_locator.0jyU7Ie.App\\Entity\\AsignacionLote', NULL, 'Cannot autowire service ".service_locator.0jyU7Ie": it references class "App\\Entity\\AsignacionLote" but no such service exists.'],
            'usuario' => ['privates', '.errored..service_locator.0jyU7Ie.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.0jyU7Ie": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'almacen' => 'App\\Entity\\Almacen',
            'asignacion' => 'App\\Entity\\Asignacion',
            'asignacionLote' => 'App\\Entity\\AsignacionLote',
            'usuario' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
