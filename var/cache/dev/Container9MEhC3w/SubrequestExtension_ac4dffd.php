<?php

namespace Container9MEhC3w;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/SubrequestExtension.php';

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\SubrequestExtension|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf7a84 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6a3ac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8b135 = [
        
    ];

    public function getFunctions() : array
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'getFunctions', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return $this->valueHolderf7a84->getFunctions();
    }

    public function getTokenParsers()
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'getTokenParsers', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return $this->valueHolderf7a84->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'getNodeVisitors', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return $this->valueHolderf7a84->getNodeVisitors();
    }

    public function getFilters()
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'getFilters', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return $this->valueHolderf7a84->getFilters();
    }

    public function getTests()
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'getTests', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return $this->valueHolderf7a84->getTests();
    }

    public function getOperators()
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'getOperators', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return $this->valueHolderf7a84->getOperators();
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

        $instance->initializer6a3ac = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Twig\Extension\Templating\Inc $incHelper)
    {
        static $reflection;

        if (! $this->valueHolderf7a84) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolderf7a84 = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper);

        }

        $this->valueHolderf7a84->__construct($incHelper);
    }

    public function & __get($name)
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__get', ['name' => $name], $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        if (isset(self::$publicProperties8b135[$name])) {
            return $this->valueHolderf7a84->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7a84;

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

        $targetObject = $this->valueHolderf7a84;
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
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7a84;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7a84;
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
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__isset', array('name' => $name), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7a84;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf7a84;
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
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__unset', array('name' => $name), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7a84;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf7a84;
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
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__clone', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        $this->valueHolderf7a84 = clone $this->valueHolderf7a84;
    }

    public function __sleep()
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__sleep', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return array('valueHolderf7a84');
    }

    public function __wakeup()
    {
        unset($this->incHelper);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6a3ac = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6a3ac;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'initializeProxy', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf7a84;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf7a84;
    }
}

if (!\class_exists('SubrequestExtension_ac4dffd', false)) {
    \class_alias(__NAMESPACE__.'\\SubrequestExtension_ac4dffd', 'SubrequestExtension_ac4dffd', false);
}
