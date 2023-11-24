<?php

namespace ContainerZNt8oMs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PluginRepository.php';

class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Repository\PluginRepository|null wrapped object, if the proxy is initialized
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

    public function findAllEnabled()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'findAllEnabled', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->findAllEnabled();
    }

    public function findByCode($code)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'findByCode', array('code' => $code), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->findByCode($code);
    }

    public function delete($entity)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'delete', array('entity' => $entity), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->delete($entity);
    }

    public function save($entity)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'save', array('entity' => $entity), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->save($entity);
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'clear', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'findAll', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'count', array('criteria' => $criteria), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getClassName', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'matching', array('criteria' => $criteria), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->matching($criteria);
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

        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializer3c7d1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderd15d2) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolderd15d2 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderd15d2->__construct($registry);
    }

    public function & __get($name)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__get', ['name' => $name], $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        if (isset(self::$publicProperties53dd5[$name])) {
            return $this->valueHolderd15d2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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

if (!\class_exists('PluginRepository_c4546a6', false)) {
    \class_alias(__NAMESPACE__.'\\PluginRepository_c4546a6', 'PluginRepository_c4546a6', false);
}