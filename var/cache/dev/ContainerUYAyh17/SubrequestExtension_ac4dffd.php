<?php

namespace ContainerUYAyh17;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/SubrequestExtension.php';

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\SubrequestExtension|null wrapped object, if the proxy is initialized
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

    public function getFunctions() : array
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'getFunctions', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->getFunctions();
    }

    public function getTokenParsers()
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'getTokenParsers', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'getNodeVisitors', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->getNodeVisitors();
    }

    public function getFilters()
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'getFilters', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->getFilters();
    }

    public function getTests()
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'getTests', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->getTests();
    }

    public function getOperators()
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'getOperators', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->getOperators();
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

        unset($instance->incHelper);

        $instance->initializer0d552 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Twig\Extension\Templating\Inc $incHelper)
    {
        static $reflection;

        if (! $this->valueHolder6d50b) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolder6d50b = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper);

        }

        $this->valueHolder6d50b->__construct($incHelper);
    }

    public function & __get($name)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, '__get', ['name' => $name], $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        if (isset(self::$publicPropertiese4e93[$name])) {
            return $this->valueHolder6d50b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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
        unset($this->incHelper);
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

if (!\class_exists('SubrequestExtension_ac4dffd', false)) {
    \class_alias(__NAMESPACE__.'\\SubrequestExtension_ac4dffd', 'SubrequestExtension_ac4dffd', false);
}
