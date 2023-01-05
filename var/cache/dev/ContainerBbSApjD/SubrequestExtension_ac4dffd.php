<?php

namespace ContainerBbSApjD;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/SubrequestExtension.php';

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\SubrequestExtension|null wrapped object, if the proxy is initialized
     */
    private $valueHolder847ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc5f58 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties443e2 = [
        
    ];

    public function getFunctions() : array
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getFunctions', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getFunctions();
    }

    public function getTokenParsers()
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getTokenParsers', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getNodeVisitors', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getNodeVisitors();
    }

    public function getFilters()
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getFilters', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getFilters();
    }

    public function getTests()
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getTests', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getTests();
    }

    public function getOperators()
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getOperators', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getOperators();
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

        $instance->initializerc5f58 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Twig\Extension\Templating\Inc $incHelper)
    {
        static $reflection;

        if (! $this->valueHolder847ed) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolder847ed = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper);

        }

        $this->valueHolder847ed->__construct($incHelper);
    }

    public function & __get($name)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__get', ['name' => $name], $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        if (isset(self::$publicProperties443e2[$name])) {
            return $this->valueHolder847ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder847ed;

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

        $targetObject = $this->valueHolder847ed;
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
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder847ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder847ed;
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
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__isset', array('name' => $name), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder847ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder847ed;
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
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__unset', array('name' => $name), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder847ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder847ed;
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
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__clone', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        $this->valueHolder847ed = clone $this->valueHolder847ed;
    }

    public function __sleep()
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__sleep', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return array('valueHolder847ed');
    }

    public function __wakeup()
    {
        unset($this->incHelper);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc5f58 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc5f58;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'initializeProxy', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder847ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder847ed;
    }
}

if (!\class_exists('SubrequestExtension_ac4dffd', false)) {
    \class_alias(__NAMESPACE__.'\\SubrequestExtension_ac4dffd', 'SubrequestExtension_ac4dffd', false);
}
