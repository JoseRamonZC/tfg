<?php

namespace Container9x3QeSG;

class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder57ee8 = null;
    private $initializer6712a = null;
    private static $publicProperties37493 = [
        
    ];
    public function setDefaultPaginatorOptions(array $options) : void
    {
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        $this->valueHolder57ee8->setDefaultPaginatorOptions($options);
return;
    }
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        return $this->valueHolder57ee8->paginate($target, $page, $limit, $options);
    }
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber) : void
    {
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        $this->valueHolder57ee8->subscribe($subscriber);
return;
    }
    public function connect(string $eventName, $listener, int $priority = 0) : void
    {
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        $this->valueHolder57ee8->connect($eventName, $listener, $priority);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eventDispatcher, $instance->defaultOptions, $instance->requestStack);
        $instance->initializer6712a = $initializer;
        return $instance;
    }
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null, ?\Symfony\Component\HttpFoundation\RequestStack $requestStack = null)
    {
        static $reflection;
        if (! $this->valueHolder57ee8) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolder57ee8 = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
        }
        $this->valueHolder57ee8->__construct($eventDispatcher, $requestStack);
    }
    public function & __get($name)
    {
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, '__get', ['name' => $name], $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        if (isset(self::$publicProperties37493[$name])) {
            return $this->valueHolder57ee8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder57ee8;
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
        $targetObject = $this->valueHolder57ee8;
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
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder57ee8;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder57ee8;
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
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, '__isset', array('name' => $name), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder57ee8;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder57ee8;
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
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, '__unset', array('name' => $name), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder57ee8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder57ee8;
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
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, '__clone', array(), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        $this->valueHolder57ee8 = clone $this->valueHolder57ee8;
    }
    public function __sleep()
    {
        $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, '__sleep', array(), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
        return array('valueHolder57ee8');
    }
    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6712a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6712a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6712a && ($this->initializer6712a->__invoke($valueHolder57ee8, $this, 'initializeProxy', array(), $this->initializer6712a) || 1) && $this->valueHolder57ee8 = $valueHolder57ee8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder57ee8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder57ee8;
    }
}

if (!\class_exists('Paginator_f262b94', false)) {
    \class_alias(__NAMESPACE__.'\\Paginator_f262b94', 'Paginator_f262b94', false);
}
