<?php

namespace ContainerOkIQS9a;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc2c4d = null;
    private $initializercb360 = null;
    private static $publicPropertiesbc2d2 = [
        
    ];
    public function getConnection()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getConnection', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getMetadataFactory', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getExpressionBuilder', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'beginTransaction', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getCache', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getCache();
    }
    public function transactional($func)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'transactional', array('func' => $func), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'wrapInTransaction', array('func' => $func), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'commit', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->commit();
    }
    public function rollback()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'rollback', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getClassMetadata', array('className' => $className), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'createQuery', array('dql' => $dql), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'createNamedQuery', array('name' => $name), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'createQueryBuilder', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'flush', array('entity' => $entity), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'clear', array('entityName' => $entityName), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->clear($entityName);
    }
    public function close()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'close', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->close();
    }
    public function persist($entity)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'persist', array('entity' => $entity), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'remove', array('entity' => $entity), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'refresh', array('entity' => $entity), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'detach', array('entity' => $entity), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'merge', array('entity' => $entity), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getRepository', array('entityName' => $entityName), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'contains', array('entity' => $entity), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getEventManager', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getConfiguration', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'isOpen', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getUnitOfWork', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getProxyFactory', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'initializeObject', array('obj' => $obj), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'getFilters', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'isFiltersStateClean', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, 'hasFilters', array(), $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        return $this->valueHolderc2c4d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercb360 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc2c4d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc2c4d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc2c4d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercb360 && ($this->initializercb360->__invoke($valueHolderc2c4d, $this, '__get', ['name' => $name], $this->initializercb360) || 1) && $this->valueHolderc2c4d = $valueHolderc2c4d;
        if (isset(self::$publicPropertiesbc2d2[$name])) {
            return $this->valueHolderc2c4d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
