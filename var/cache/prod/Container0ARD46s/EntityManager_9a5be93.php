<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd2138 = null;
    private $initializerd6c0d = null;
    private static $publicProperties14b9d = [
        
    ];
    public function getConnection()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getConnection', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getMetadataFactory', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getExpressionBuilder', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'beginTransaction', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getCache', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'transactional', array('func' => $func), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'commit', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->commit();
    }
    public function rollback()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'rollback', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getClassMetadata', array('className' => $className), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'createQuery', array('dql' => $dql), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'createNamedQuery', array('name' => $name), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'createQueryBuilder', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'flush', array('entity' => $entity), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'clear', array('entityName' => $entityName), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->clear($entityName);
    }
    public function close()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'close', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->close();
    }
    public function persist($entity)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'persist', array('entity' => $entity), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'remove', array('entity' => $entity), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'refresh', array('entity' => $entity), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'detach', array('entity' => $entity), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'merge', array('entity' => $entity), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'contains', array('entity' => $entity), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getEventManager', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getConfiguration', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'isOpen', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getUnitOfWork', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getProxyFactory', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'initializeObject', array('obj' => $obj), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getFilters', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'isFiltersStateClean', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'hasFilters', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd6c0d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd2138) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd2138 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd2138->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__get', ['name' => $name], $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        if (isset(self::$publicProperties14b9d[$name])) {
            return $this->valueHolderd2138->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2138;
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
        $targetObject = $this->valueHolderd2138;
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
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2138;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd2138;
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
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__isset', array('name' => $name), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2138;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd2138;
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
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__unset', array('name' => $name), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2138;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd2138;
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
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__clone', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        $this->valueHolderd2138 = clone $this->valueHolderd2138;
    }
    public function __sleep()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__sleep', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return array('valueHolderd2138');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd6c0d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd6c0d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'initializeProxy', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd2138;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd2138;
    }
}
