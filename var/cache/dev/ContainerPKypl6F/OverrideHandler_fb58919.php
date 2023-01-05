<?php

namespace ContainerPKypl6F;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1b1c4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6392 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbed6c = [
        
    ];

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'getForm', array('request' => $request), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'handleRequest', array('request' => $request), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->handleForm($form, $request);
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

        $instance->initializerc6392 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder1b1c4) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder1b1c4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder1b1c4->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__get', ['name' => $name], $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        if (isset(self::$publicPropertiesbed6c[$name])) {
            return $this->valueHolder1b1c4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b1c4;

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

        $targetObject = $this->valueHolder1b1c4;
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
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b1c4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1b1c4;
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
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__isset', array('name' => $name), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b1c4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1b1c4;
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
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__unset', array('name' => $name), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b1c4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1b1c4;
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
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__clone', array(), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        $this->valueHolder1b1c4 = clone $this->valueHolder1b1c4;
    }

    public function __sleep()
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__sleep', array(), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return array('valueHolder1b1c4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6392 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6392;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'initializeProxy', array(), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1b1c4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1b1c4;
    }
}

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
