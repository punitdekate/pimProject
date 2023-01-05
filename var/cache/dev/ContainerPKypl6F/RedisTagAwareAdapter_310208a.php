<?php

namespace ContainerPKypl6F;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'commit', array(), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'deleteItems', array('keys' => $keys), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'invalidateTags', array('tags' => $tags), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'hasItem', array('key' => $key), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'clear', array('prefix' => $prefix), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'deleteItem', array('key' => $key), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'getItem', array('key' => $key), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'getItems', array('keys' => $keys), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'save', array('item' => $item), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'saveDeferred', array('item' => $item), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'enableVersioning', array('enable' => $enable), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'reset', array(), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'setLogger', array('logger' => $logger), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, 'delete', array('key' => $key), $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        return $this->valueHolder1b1c4->delete($key);
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

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($instance);

        $instance->initializerc6392 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder1b1c4) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder1b1c4 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder1b1c4->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializerc6392 && ($this->initializerc6392->__invoke($valueHolder1b1c4, $this, '__get', ['name' => $name], $this->initializerc6392) || 1) && $this->valueHolder1b1c4 = $valueHolder1b1c4;

        if (isset(self::$publicPropertiesbed6c[$name])) {
            return $this->valueHolder1b1c4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);
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

    public function __destruct()
    {
        $this->initializerc6392 || $this->valueHolder1b1c4->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
