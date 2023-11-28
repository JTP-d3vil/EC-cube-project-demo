<?php

namespace ContainerLNJE5ut;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd15d2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3c7d1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties53dd5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getConnection', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getMetadataFactory', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getExpressionBuilder', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'beginTransaction', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getCache', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'transactional', array('func' => $func), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'commit', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->commit();
    }

    public function rollback()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'rollback', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getClassMetadata', array('className' => $className), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createQuery', array('dql' => $dql), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createNamedQuery', array('name' => $name), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createQueryBuilder', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'flush', array('entity' => $entity), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'clear', array('entityName' => $entityName), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->clear($entityName);
    }

    public function close()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'close', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->close();
    }

    public function persist($entity)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'persist', array('entity' => $entity), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'remove', array('entity' => $entity), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'detach', array('entity' => $entity), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'merge', array('entity' => $entity), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'contains', array('entity' => $entity), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getEventManager', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getConfiguration', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'isOpen', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getUnitOfWork', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getProxyFactory', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'initializeObject', array('obj' => $obj), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getFilters', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'isFiltersStateClean', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'hasFilters', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->hasFilters();
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

        $instance->initializer3c7d1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderd15d2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd15d2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd15d2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__get', ['name' => $name], $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        if (isset(self::$publicProperties53dd5[$name])) {
            return $this->valueHolderd15d2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd15d2;

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

        $targetObject = $this->valueHolderd15d2;
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
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd15d2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd15d2;
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
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__isset', array('name' => $name), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd15d2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd15d2;
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
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__unset', array('name' => $name), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd15d2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd15d2;
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
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__clone', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        $this->valueHolderd15d2 = clone $this->valueHolderd15d2;
    }

    public function __sleep()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__sleep', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return array('valueHolderd15d2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3c7d1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3c7d1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'initializeProxy', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd15d2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd15d2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
