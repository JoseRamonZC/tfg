<?php

namespace ContainerScqAvDQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CTx4KSBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cTx4KSB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cTx4KSB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
            'usuario' => ['privates', '.errored..service_locator.cTx4KSB.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.cTx4KSB": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'encoder' => '?',
            'usuario' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
