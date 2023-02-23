<?php

namespace ContainerKQoCclH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OtNWNhuService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.OtNWNhu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OtNWNhu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'almacen' => ['privates', '.errored..service_locator.OtNWNhu.App\\Entity\\Almacen', NULL, 'Cannot autowire service ".service_locator.OtNWNhu": it references class "App\\Entity\\Almacen" but no such service exists.'],
            'importacion' => ['privates', '.errored..service_locator.OtNWNhu.App\\Entity\\Importacion', NULL, 'Cannot autowire service ".service_locator.OtNWNhu": it references class "App\\Entity\\Importacion" but no such service exists.'],
            'usuario' => ['privates', '.errored..service_locator.OtNWNhu.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.OtNWNhu": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'almacen' => 'App\\Entity\\Almacen',
            'importacion' => 'App\\Entity\\Importacion',
            'usuario' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
