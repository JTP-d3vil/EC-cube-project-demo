<?php

namespace ContainerHLbnio5;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'CartService.php';
class CartService_9dde17f extends \Eccube\Service\CartService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfed2c = null;
    private $initializer27d7c = null;
    private static $publicPropertiesc4577 = [
        
    ];
    public function getCarts($empty_delete = false)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getCarts', array('empty_delete' => $empty_delete), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getCarts($empty_delete);
    }
    public function getPersistedCarts()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getPersistedCarts', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getPersistedCarts();
    }
    public function getSessionCarts()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getSessionCarts', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getSessionCarts();
    }
    public function mergeFromPersistedCart()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'mergeFromPersistedCart', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->mergeFromPersistedCart();
    }
    public function getCart()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getCart', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getCart();
    }
    public function addProduct($ProductClass, $quantity = 1)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'addProduct', array('ProductClass' => $ProductClass, 'quantity' => $quantity), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->addProduct($ProductClass, $quantity);
    }
    public function removeProduct($ProductClass)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'removeProduct', array('ProductClass' => $ProductClass), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->removeProduct($ProductClass);
    }
    public function save()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'save', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->save();
    }
    public function setPreOrderId($pre_order_id)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'setPreOrderId', array('pre_order_id' => $pre_order_id), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->setPreOrderId($pre_order_id);
    }
    public function getPreOrderId()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getPreOrderId', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getPreOrderId();
    }
    public function clear()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'clear', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->clear();
    }
    public function setCartItemComparator($cartItemComparator)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'setCartItemComparator', array('cartItemComparator' => $cartItemComparator), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->setCartItemComparator($cartItemComparator);
    }
    public function setPrimary($cartKey)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'setPrimary', array('cartKey' => $cartKey), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->setPrimary($cartKey);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->carts, $instance->session, $instance->entityManager, $instance->cart, $instance->productClassRepository, $instance->cartRepository, $instance->cartItemComparator, $instance->cartItemAllocator, $instance->orderRepository, $instance->tokenStorage, $instance->authorizationChecker);
        $instance->initializer27d7c = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\ProductClassRepository $productClassRepository, \Eccube\Repository\CartRepository $cartRepository, \Eccube\Service\Cart\CartItemComparator $cartItemComparator, \Eccube\Service\Cart\CartItemAllocator $cartItemAllocator, \Eccube\Repository\OrderRepository $orderRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
        static $reflection;
        if (! $this->valueHolderfed2c) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\CartService');
            $this->valueHolderfed2c = $reflection->newInstanceWithoutConstructor();
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
        }
        $this->valueHolderfed2c->__construct($session, $entityManager, $productClassRepository, $cartRepository, $cartItemComparator, $cartItemAllocator, $orderRepository, $tokenStorage, $authorizationChecker);
    }
    public function & __get($name)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__get', ['name' => $name], $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        if (isset(self::$publicPropertiesc4577[$name])) {
            return $this->valueHolderfed2c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
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

if (!\class_exists('CartService_9dde17f', false)) {
    \class_alias(__NAMESPACE__.'\\CartService_9dde17f', 'CartService_9dde17f', false);
}
