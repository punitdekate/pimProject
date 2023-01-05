<?php

namespace ContainerBbSApjD;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'commit', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'deleteItems', array('keys' => $keys), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'invalidateTags', array('tags' => $tags), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'hasItem', array('key' => $key), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'clear', array('prefix' => $prefix), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'deleteItem', array('key' => $key), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getItem', array('key' => $key), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'getItems', array('keys' => $keys), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'save', array('item' => $item), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'saveDeferred', array('item' => $item), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'enableVersioning', array('enable' => $enable), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'reset', array(), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'setLogger', array('logger' => $logger), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, 'delete', array('key' => $key), $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        return $this->valueHolder847ed->delete($key);
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

        $instance->initializerc5f58 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder847ed) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder847ed = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder847ed->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializerc5f58 && ($this->initializerc5f58->__invoke($valueHolder847ed, $this, '__get', ['name' => $name], $this->initializerc5f58) || 1) && $this->valueHolder847ed = $valueHolder847ed;

        if (isset(self::$publicProperties443e2[$name])) {
            return $this->valueHolder847ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

    public function __destruct()
    {
        $this->initializerc5f58 || $this->valueHolder847ed->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
