<?php

namespace ContainerIQw6xm6;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticatedTokenHandler.php';

class AuthenticatedTokenHandler_e3677d3 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf7a84 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6a3ac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8b135 = [
        
    ];

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return $this->valueHolderf7a84->beginTwoFactorAuthentication($context);
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

        $instance->initializer6a3ac = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, array $supportedTokens)
    {
        static $reflection;

        if (! $this->valueHolderf7a84) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');
            $this->valueHolderf7a84 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);

        }

        $this->valueHolderf7a84->__construct($authenticationHandler, $supportedTokens);
    }

    public function & __get($name)
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__get', ['name' => $name], $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        if (isset(self::$publicProperties8b135[$name])) {
            return $this->valueHolderf7a84->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7a84;

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

        $targetObject = $this->valueHolderf7a84;
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
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7a84;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7a84;
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
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__isset', array('name' => $name), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7a84;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf7a84;
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
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__unset', array('name' => $name), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7a84;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf7a84;
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
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__clone', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        $this->valueHolderf7a84 = clone $this->valueHolderf7a84;
    }

    public function __sleep()
    {
        $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, '__sleep', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;

        return array('valueHolderf7a84');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6a3ac = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6a3ac;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6a3ac && ($this->initializer6a3ac->__invoke($valueHolderf7a84, $this, 'initializeProxy', array(), $this->initializer6a3ac) || 1) && $this->valueHolderf7a84 = $valueHolderf7a84;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf7a84;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf7a84;
    }
}

if (!\class_exists('AuthenticatedTokenHandler_e3677d3', false)) {
    \class_alias(__NAMESPACE__.'\\AuthenticatedTokenHandler_e3677d3', 'AuthenticatedTokenHandler_e3677d3', false);
}
