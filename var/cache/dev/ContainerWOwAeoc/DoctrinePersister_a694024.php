<?php

namespace ContainerWOwAeoc;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersister.php';

class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6d50b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0d552 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese4e93 = [
        
    ];

    public function persist($user) : void
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'persist', array('user' => $user), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        $this->valueHolder6d50b->persist($user);
return;
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $instance, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($instance);

        $instance->initializer0d552 = $initializer;

        return $instance;
    }

    public function __construct($om)
    {
        static $reflection;

        if (! $this->valueHolder6d50b) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHolder6d50b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);

        }

        $this->valueHolder6d50b->__construct($om);
    }

    public function & __get($name)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, '__get', ['name' => $name], $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        if (isset(self::$publicPropertiese4e93[$name])) {
            return $this->valueHolder6d50b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d50b;

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

        $targetObject = $this->valueHolder6d50b;
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
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d50b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6d50b;
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
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, '__isset', array('name' => $name), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d50b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6d50b;
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
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, '__unset', array('name' => $name), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d50b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6d50b;
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
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, '__clone', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        $this->valueHolder6d50b = clone $this->valueHolder6d50b;
    }

    public function __sleep()
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, '__sleep', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return array('valueHolder6d50b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0d552 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0d552;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'initializeProxy', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6d50b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6d50b;
    }
}

if (!\class_exists('DoctrinePersister_a694024', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersister_a694024', 'DoctrinePersister_a694024', false);
}
