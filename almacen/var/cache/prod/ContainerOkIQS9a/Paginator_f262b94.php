<?php

namespace ContainerOkIQS9a;

class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc2c4d = null;
    private $initializercb360 = null;
    private static $publicPropertiesbc2d2 = [
        
    ];
    public function setDefaultPaginatorOptions(array $options) : void
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        $this->valueHolderc2c4d->setDefaultPaginatorOptions($options);
return;
    }
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->paginate($target, $page, $limit, $options);
    }
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber) : void
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        $this->valueHolderc2c4d->subscribe($subscriber);
return;
    }
    public function connect(string $eventName, $listener, int $priority = 0) : void
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        $this->valueHolderc2c4d->connect($eventName, $listener, $priority);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eventDispatcher, $instance->defaultOptions, $instance->requestStack);
        $instance->initializercb360 = $initializer;
        return $instance;
    }
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null, ?\Symfony\Component\HttpFoundation\RequestStack $requestStack = null)
    {
        static $reflection;
        if (! $this->valueHolderc2c4d) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolderc2c4d = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
        }
        $this->valueHolderc2c4d->__construct($eventDispatcher, $requestStack);
    }
    public function & __get($name)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, '__get', ['name' => $name], $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        if (isset(self::$publicPropertiesbc2d2[$name])) {
            return $this->valueHolderc2c4d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2c4d;
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
        $targetObject = $this->valueHolderc2c4d;
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
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2c4d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc2c4d;
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
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, '__isset', array('name' => $name), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2c4d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc2c4d;
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
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, '__unset', array('name' => $name), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2c4d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc2c4d;
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
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, '__clone', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        $this->valueHolderc2c4d = clone $this->valueHolderc2c4d;
    }
    public function __sleep()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, '__sleep', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return array('valueHolderc2c4d');
    }
    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercb360 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercb360;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'initializeProxy', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc2c4d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc2c4d;
    }
}

if (!\class_exists('Paginator_f262b94', false)) {
    \class_alias(__NAMESPACE__.'\\Paginator_f262b94', 'Paginator_f262b94', false);
}
