<?php

namespace Container9x3QeSG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolClearService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($container->services['cache.global_clearer'] ?? $container->load('getCache_GlobalClearerService')), [0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal', 7 => 'cache.rate_limiter', 8 => 'doctrine.result_cache_pool', 9 => 'doctrine.system_cache_pool', 10 => 'cache.property_access', 11 => 'cache.validator_expression_language', 12 => 'cache.webpack_encore', 13 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:clear');
        $instance->setDescription('Clear cache pools');

        return $instance;
    }
}
