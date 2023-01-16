<?php

namespace ContainerSQ1vNOu;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'commit', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'deleteItems', array('keys' => $keys), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'invalidateTags', array('tags' => $tags), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'hasItem', array('key' => $key), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'clear', array('prefix' => $prefix), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'deleteItem', array('key' => $key), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'getItem', array('key' => $key), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'getItems', array('keys' => $keys), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'save', array('item' => $item), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'saveDeferred', array('item' => $item), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'enableVersioning', array('enable' => $enable), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'reset', array(), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'setLogger', array('logger' => $logger), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, 'delete', array('key' => $key), $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        return $this->valueHolder6d50b->delete($key);
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

        $instance->initializer0d552 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder6d50b) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder6d50b = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder6d50b->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializer0d552 && ($this->initializer0d552->__invoke($valueHolder6d50b, $this, '__get', ['name' => $name], $this->initializer0d552) || 1) && $this->valueHolder6d50b = $valueHolder6d50b;

        if (isset(self::$publicPropertiese4e93[$name])) {
            return $this->valueHolder6d50b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

    public function __destruct()
    {
        $this->initializer0d552 || $this->valueHolder6d50b->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
