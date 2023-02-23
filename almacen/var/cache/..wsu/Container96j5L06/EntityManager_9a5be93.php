<?php

namespace Container96j5L06;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9abd2 = null;
    private $initializerb7693 = null;
    private static $publicPropertiesd0c29 = [
        
    ];
    public function getConnection()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getConnection', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getMetadataFactory', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getExpressionBuilder', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'beginTransaction', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getCache', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'transactional', array('func' => $func), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'commit', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->commit();
    }
    public function rollback()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'rollback', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getClassMetadata', array('className' => $className), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'createQuery', array('dql' => $dql), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'createNamedQuery', array('name' => $name), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'createQueryBuilder', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'flush', array('entity' => $entity), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'clear', array('entityName' => $entityName), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->clear($entityName);
    }
    public function close()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'close', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->close();
    }
    public function persist($entity)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'persist', array('entity' => $entity), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'remove', array('entity' => $entity), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'refresh', array('entity' => $entity), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'detach', array('entity' => $entity), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'merge', array('entity' => $entity), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'contains', array('entity' => $entity), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getEventManager', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getConfiguration', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'isOpen', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getUnitOfWork', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getProxyFactory', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'initializeObject', array('obj' => $obj), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'getFilters', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'isFiltersStateClean', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, 'hasFilters', array(), $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        return $this->valueHolder9abd2->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb7693 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9abd2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9abd2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9abd2->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb7693 && ($this->initializerb7693->__invoke($valueHolder9abd2, $this, '__get', ['name' => $name], $this->initializerb7693) || 1) && $this->valueHolder9abd2 = $valueHolder9abd2;
        if (isset(self::$publicPropertiesd0c29[$name])) {
            return $this->valueHolder9abd2->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
