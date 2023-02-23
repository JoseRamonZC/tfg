<?php

namespace ContainerLawXzQA;

class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder08d3e = null;
    private $initializera0559 = null;
    private static $publicProperties077e1 = [
        
    ];
    public function setDefaultPaginatorOptions(array $options) : void
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        $this->valueHolder08d3e->setDefaultPaginatorOptions($options);
return;
    }
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        return $this->valueHolder08d3e->paginate($target, $page, $limit, $options);
    }
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber) : void
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        $this->valueHolder08d3e->subscribe($subscriber);
return;
    }
    public function connect(string $eventName, $listener, int $priority = 0) : void
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        $this->valueHolder08d3e->connect($eventName, $listener, $priority);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eventDispatcher, $instance->defaultOptions, $instance->requestStack);
        $instance->initializera0559 = $initializer;
        return $instance;
    }
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null, ?\Symfony\Component\HttpFoundation\RequestStack $requestStack = null)
    {
        static $reflection;
        if (! $this->valueHolder08d3e) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolder08d3e = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
        }
        $this->valueHolder08d3e->__construct($eventDispatcher, $requestStack);
    }
    public function & __get($name)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, '__get', ['name' => $name], $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        if (isset(self::$publicProperties077e1[$name])) {
            return $this->valueHolder08d3e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08d3e;
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
        $targetObject = $this->valueHolder08d3e;
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
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08d3e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder08d3e;
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
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, '__isset', array('name' => $name), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08d3e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder08d3e;
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
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, '__unset', array('name' => $name), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08d3e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder08d3e;
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
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, '__clone', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        $this->valueHolder08d3e = clone $this->valueHolder08d3e;
    }
    public function __sleep()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, '__sleep', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
        return array('valueHolder08d3e');
    }
    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0559 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0559;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'initializeProxy', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder08d3e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder08d3e;
    }
}

if (!\class_exists('Paginator_f262b94', false)) {
    \class_alias(__NAMESPACE__.'\\Paginator_f262b94', 'Paginator_f262b94', false);
}
