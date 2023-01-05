<?php

namespace ContainerBbSApjD;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
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

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'build', array('params' => $params), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getRenderer', array('alias' => $alias), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'setCharset', array('charset' => $charset), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getCharset', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getCharset();
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

        $instance->initializerc5f58 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder847ed) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder847ed = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder847ed->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__get', ['name' => $name], $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        if (isset(self::$publicProperties443e2[$name])) {
            return $this->valueHolder847ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
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

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
