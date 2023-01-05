<?php

namespace ContainerPKypl6F;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
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

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'build', array('params' => $params), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'getRenderer', array('alias' => $alias), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'setCharset', array('charset' => $charset), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'getCharset', array(), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->getCharset();
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

        unset($instance->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($instance);

        $instance->initializerc6392 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder1b1c4) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder1b1c4 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder1b1c4->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__get', ['name' => $name], $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        if (isset(self::$publicPropertiesbed6c[$name])) {
            return $this->valueHolder1b1c4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
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

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
