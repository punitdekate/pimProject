<?php

namespace ContainerBbSApjD;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
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

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getForm', array('request' => $request), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'handleRequest', array('request' => $request), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->handleForm($form, $request);
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

        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $instance, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($instance);

        $instance->initializerc5f58 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder847ed) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder847ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder847ed->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__get', ['name' => $name], $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        if (isset(self::$publicProperties443e2[$name])) {
            return $this->valueHolder847ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
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

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
