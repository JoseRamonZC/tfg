<?php

namespace Container96j5L06;

include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';
class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9abd2 = null;
    private $initializerb7693 = null;
    private static $publicPropertiesd0c29 = [
        
    ];
    public function setDefaultPaginatorOptions(array $options) : void
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        $this->valueHolder9abd2->setDefaultPaginatorOptions($options);
return;
    }
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->paginate($target, $page, $limit, $options);
    }
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber) : void
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        $this->valueHolder9abd2->subscribe($subscriber);
return;
    }
    public function connect(string $eventName, $listener, int $priority = 0) : void
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        $this->valueHolder9abd2->connect($eventName, $listener, $priority);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eventDispatcher, $instance->defaultOptions, $instance->requestStack);
        $instance->initializerb7693 = $initializer;
        return $instance;
    }
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null, ?\Symfony\Component\HttpFoundation\RequestStack $requestStack = null)
    {
        static $reflection;
        if (! $this->valueHolder9abd2) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolder9abd2 = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
        }
        $this->valueHolder9abd2->__construct($eventDispatcher, $requestStack);
    }
    public function & __get($name)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, '__get', ['name' => $name], $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        if (isset(self::$publicPropertiesd0c29[$name])) {
            return $this->valueHolder9abd2->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9abd2;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9abd2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9abd2;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9abd2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, '__isset', array('name' => $name), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9abd2;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9abd2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, '__unset', array('name' => $name), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9abd2;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9abd2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, '__clone', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        $this->valueHolder9abd2 = clone $this->valueHolder9abd2;
    }
    public function __sleep()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, '__sleep', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return array('valueHolder9abd2');
    }
    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb7693 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb7693;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'initializeProxy', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9abd2;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9abd2;
    }
}

if (!\class_exists('Paginator_f262b94', false)) {
    \class_alias(__NAMESPACE__.'\\Paginator_f262b94', 'Paginator_f262b94', false);
}
