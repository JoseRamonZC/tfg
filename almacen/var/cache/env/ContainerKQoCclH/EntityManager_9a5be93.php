<?php

namespace ContainerKQoCclH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder08d3e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera0559 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties077e1 = [
        
    ];

    public function getConnection()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getConnection', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getMetadataFactory', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getExpressionBuilder', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'beginTransaction', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getCache', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getCache();
    }

    public function transactional($func)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'transactional', array('func' => $func), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'wrapInTransaction', array('func' => $func), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'commit', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->commit();
    }

    public function rollback()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'rollback', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getClassMetadata', array('className' => $className), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'createQuery', array('dql' => $dql), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'createNamedQuery', array('name' => $name), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'createQueryBuilder', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'flush', array('entity' => $entity), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'clear', array('entityName' => $entityName), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->clear($entityName);
    }

    public function close()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'close', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->close();
    }

    public function persist($entity)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'persist', array('entity' => $entity), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'remove', array('entity' => $entity), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'refresh', array('entity' => $entity), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'detach', array('entity' => $entity), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'merge', array('entity' => $entity), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getRepository', array('entityName' => $entityName), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'contains', array('entity' => $entity), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getEventManager', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getConfiguration', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'isOpen', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getUnitOfWork', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getProxyFactory', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'initializeObject', array('obj' => $obj), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'getFilters', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'isFiltersStateClean', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, 'hasFilters', array(), $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        return $this->valueHolder08d3e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera0559 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder08d3e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder08d3e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder08d3e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera0559 && ($this->initializera0559->__invoke($valueHolder08d3e, $this, '__get', ['name' => $name], $this->initializera0559) || 1) && $this->valueHolder08d3e = $valueHolder08d3e;

        if (isset(self::$publicProperties077e1[$name])) {
            return $this->valueHolder08d3e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
