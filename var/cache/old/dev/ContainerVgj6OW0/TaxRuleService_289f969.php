<?php

namespace ContainerVgj6OW0;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'TaxRuleService.php';

class TaxRuleService_289f969 extends \Eccube\Service\TaxRuleService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Service\TaxRuleService|null wrapped object, if the proxy is initialized
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

    public function getTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getTax($price, $product, $productClass, $pref, $country);
    }

    public function getPriceIncTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getPriceIncTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getPriceIncTax($price, $product, $productClass, $pref, $country);
    }

    public function calcTax($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'calcTax', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->calcTax($price, $taxRate, $RoundingType, $taxAdjust);
    }

    public function calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'calcTaxIncluded', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust);
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

        unset($instance->BaseInfo, $instance->taxRuleRepository);

        $instance->initializer3c7d1 = $initializer;

        return $instance;
    }

    public function __construct(\Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Repository\BaseInfoRepository $baseInfoRepository)
    {
        static $reflection;

        if (! $this->valueHolderd15d2) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\TaxRuleService');
            $this->valueHolderd15d2 = $reflection->newInstanceWithoutConstructor();
        unset($this->BaseInfo, $this->taxRuleRepository);

        }

        $this->valueHolderd15d2->__construct($taxRuleRepository, $baseInfoRepository);
    }

    public function & __get($name)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__get', ['name' => $name], $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        if (isset(self::$publicProperties53dd5[$name])) {
            return $this->valueHolderd15d2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');

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
        unset($this->BaseInfo, $this->taxRuleRepository);
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

if (!\class_exists('TaxRuleService_289f969', false)) {
    \class_alias(__NAMESPACE__.'\\TaxRuleService_289f969', 'TaxRuleService_289f969', false);
}
