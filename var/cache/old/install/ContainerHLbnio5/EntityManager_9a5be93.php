<?php

namespace ContainerHLbnio5;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfed2c = null;
    private $initializer27d7c = null;
    private static $publicPropertiesc4577 = [
        
    ];
    public function getConnection()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getConnection', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getMetadataFactory', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getExpressionBuilder', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'beginTransaction', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getCache', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'transactional', array('func' => $func), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'commit', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->commit();
    }
    public function rollback()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'rollback', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getClassMetadata', array('className' => $className), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createQuery', array('dql' => $dql), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createNamedQuery', array('name' => $name), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createQueryBuilder', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'flush', array('entity' => $entity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'clear', array('entityName' => $entityName), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->clear($entityName);
    }
    public function close()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'close', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->close();
    }
    public function persist($entity)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'persist', array('entity' => $entity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'remove', array('entity' => $entity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->remove($entity);
    }
    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->refresh($entity, $lockMode);
    }
    public function detach($entity)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'detach', array('entity' => $entity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'merge', array('entity' => $entity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'contains', array('entity' => $entity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getEventManager', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getConfiguration', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'isOpen', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getUnitOfWork', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getProxyFactory', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'initializeObject', array('obj' => $obj), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getFilters', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'isFiltersStateClean', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'hasFilters', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer27d7c = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;
        if (! $this->valueHolderfed2c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfed2c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderfed2c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__get', ['name' => $name], $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        if (isset(self::$publicPropertiesc4577[$name])) {
            return $this->valueHolderfed2c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed2c;
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
        $targetObject = $this->valueHolderfed2c;
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
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed2c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderfed2c;
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
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__isset', array('name' => $name), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed2c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderfed2c;
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
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__unset', array('name' => $name), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed2c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderfed2c;
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
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__clone', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        $this->valueHolderfed2c = clone $this->valueHolderfed2c;
    }
    public function __sleep()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__sleep', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return array('valueHolderfed2c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer27d7c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer27d7c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'initializeProxy', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfed2c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfed2c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
