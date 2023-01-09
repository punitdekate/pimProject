<?php

namespace ContainerSAfzBas;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'commit', array(), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'deleteItems', array('keys' => $keys), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'invalidateTags', array('tags' => $tags), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'hasItem', array('key' => $key), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'clear', array('prefix' => $prefix), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'deleteItem', array('key' => $key), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'getItem', array('key' => $key), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'getItems', array('keys' => $keys), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'save', array('item' => $item), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'saveDeferred', array('item' => $item), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'enableVersioning', array('enable' => $enable), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'reset', array(), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'setLogger', array('logger' => $logger), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'delete', array('key' => $key), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->delete($key);
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

        $instance->initializere0fc9 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolderb5f44) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolderb5f44 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolderb5f44->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, '__get', ['name' => $name], $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        if (isset(self::$publicProperties0d741[$name])) {
            return $this->valueHolderb5f44->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

    public function __destruct()
    {
        $this->initializere0fc9 || $this->valueHolderb5f44->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
