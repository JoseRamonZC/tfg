<?php

namespace ContainerHf6At7N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lr6LYlLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lr6LYlL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lr6LYlL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pdf' => ['privates', '.errored.bOjGlk6', NULL, 'Cannot determine controller argument for "App\\Controller\\PDFController::index()": the $pdf argument is type-hinted with the non-existent class or interface: "Knp\\Snnapy\\Pdf".'],
        ], [
            'pdf' => '?',
        ]);
    }
}
