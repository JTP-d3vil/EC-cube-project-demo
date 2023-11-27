<?php

namespace ContainerHLbnio5;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';
class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolderfed2c = null;
    private $initializer27d7c = null;
    private static $publicPropertiesc4577 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        if ($this->valueHolderfed2c === $returnValue = $this->valueHolderfed2c->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer27d7c = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolderfed2c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderfed2c = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__get', ['name' => $name], $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        if (isset(self::$publicPropertiesc4577[$name])) {
            return $this->valueHolderfed2c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
