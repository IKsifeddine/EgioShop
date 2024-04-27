<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd2138 = null;
    private $initializerd6c0d = null;
    private static $publicProperties14b9d = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getList', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getInstalledModules', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getMustBeConfiguredModules', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getUpgradableModules', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'setActionUrls', array('collection' => $collection), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return $this->valueHolderd2138->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerd6c0d = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderd2138) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderd2138 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderd2138->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__get', ['name' => $name], $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        if (isset(self::$publicProperties14b9d[$name])) {
            return $this->valueHolderd2138->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2138;
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
        $targetObject = $this->valueHolderd2138;
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
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2138;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd2138;
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
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__isset', array('name' => $name), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2138;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd2138;
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
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__unset', array('name' => $name), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2138;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd2138;
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
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__clone', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        $this->valueHolderd2138 = clone $this->valueHolderd2138;
    }
    public function __sleep()
    {
        $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, '__sleep', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
        return array('valueHolderd2138');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd6c0d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd6c0d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd6c0d && ($this->initializerd6c0d->__invoke($valueHolderd2138, $this, 'initializeProxy', array(), $this->initializerd6c0d) || 1) && $this->valueHolderd2138 = $valueHolderd2138;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd2138;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd2138;
    }
}
