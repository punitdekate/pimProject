<?php

namespace ContainerSAfzBas;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb5f44 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere0fc9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0d741 = [
        
    ];

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'getForm', array('request' => $request), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'handleRequest', array('request' => $request), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->handleForm($form, $request);
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

        $instance->initializere0fc9 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolderb5f44) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolderb5f44 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolderb5f44->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, '__get', ['name' => $name], $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        if (isset(self::$publicProperties0d741[$name])) {
            return $this->valueHolderb5f44->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5f44;

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

        $targetObject = $this->valueHolderb5f44;
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
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5f44;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb5f44;
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
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, '__isset', array('name' => $name), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5f44;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb5f44;
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
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, '__unset', array('name' => $name), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5f44;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb5f44;
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
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, '__clone', array(), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        $this->valueHolderb5f44 = clone $this->valueHolderb5f44;
    }

    public function __sleep()
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, '__sleep', array(), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return array('valueHolderb5f44');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere0fc9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere0fc9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'initializeProxy', array(), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb5f44;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb5f44;
    }
}

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
