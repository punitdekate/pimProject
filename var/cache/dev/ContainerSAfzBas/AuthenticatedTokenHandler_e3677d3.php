<?php

namespace ContainerSAfzBas;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticatedTokenHandler.php';

class AuthenticatedTokenHandler_e3677d3 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler|null wrapped object, if the proxy is initialized
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

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        return $this->valueHolderb5f44->beginTwoFactorAuthentication($context);
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($instance);

        $instance->initializere0fc9 = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, array $supportedTokens)
    {
        static $reflection;

        if (! $this->valueHolderb5f44) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');
            $this->valueHolderb5f44 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);

        }

        $this->valueHolderb5f44->__construct($authenticationHandler, $supportedTokens);
    }

    public function & __get($name)
    {
        $this->initializere0fc9 && ($this->initializere0fc9->__invoke($valueHolderb5f44, $this, '__get', ['name' => $name], $this->initializere0fc9) || 1) && $this->valueHolderb5f44 = $valueHolderb5f44;

        if (isset(self::$publicProperties0d741[$name])) {
            return $this->valueHolderb5f44->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);
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

if (!\class_exists('AuthenticatedTokenHandler_e3677d3', false)) {
    \class_alias(__NAMESPACE__.'\\AuthenticatedTokenHandler_e3677d3', 'AuthenticatedTokenHandler_e3677d3', false);
}
