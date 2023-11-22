<?php

namespace ContainerHLbnio5;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PluginRepository.php';
class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfed2c = null;
    private $initializer27d7c = null;
    private static $publicPropertiesc4577 = [
        
    ];
    public function findAllEnabled()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'findAllEnabled', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->findAllEnabled();
    }
    public function findByCode($code)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'findByCode', array('code' => $code), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->findByCode($code);
    }
    public function delete($entity)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'delete', array('entity' => $entity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->delete($entity);
    }
    public function save($entity)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'save', array('entity' => $entity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'clear', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'findAll', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'count', array('criteria' => $criteria), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getClassName', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'matching', array('criteria' => $criteria), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializer27d7c = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry)
    {
        static $reflection;
        if (! $this->valueHolderfed2c) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolderfed2c = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolderfed2c->__construct($registry);
    }
    public function & __get($name)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__get', ['name' => $name], $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        if (isset(self::$publicPropertiesc4577[$name])) {
            return $this->valueHolderfed2c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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

if (!\class_exists('PluginRepository_c4546a6', false)) {
    \class_alias(__NAMESPACE__.'\\PluginRepository_c4546a6', 'PluginRepository_c4546a6', false);
}
