<?php

namespace ContainerHLbnio5;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfed2c = null;
    private $initializer27d7c = null;
    private static $publicPropertiesc4577 = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'installWithCode', array('code' => $code), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'preInstall', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createTempDir', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'deleteDirs', array('arr' => $arr), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'checkSymbolName', array('string' => $string), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'deleteFile', array('path' => $path), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'checkSamePlugin', array('code' => $code), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'calcPluginDir', array('code' => $code), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'createPluginDir', array('d' => $d), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'unregisterPlugin', array('p' => $p), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'disable', array('plugin' => $plugin), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return $this->valueHolderfed2c->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializer27d7c = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolderfed2c) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolderfed2c = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolderfed2c->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__get', ['name' => $name], $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        if (isset(self::$publicPropertiesc4577[$name])) {
            return $this->valueHolderfed2c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed2c;
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
        $targetObject = $this->valueHolderfed2c;
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
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed2c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderfed2c;
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
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__isset', array('name' => $name), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed2c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderfed2c;
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
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__unset', array('name' => $name), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed2c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderfed2c;
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
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__clone', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        $this->valueHolderfed2c = clone $this->valueHolderfed2c;
    }
    public function __sleep()
    {
        $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, '__sleep', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
        return array('valueHolderfed2c');
    }
    public function __wakeup()
    {
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer27d7c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer27d7c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer27d7c && ($this->initializer27d7c->__invoke($valueHolderfed2c, $this, 'initializeProxy', array(), $this->initializer27d7c) || 1) && $this->valueHolderfed2c = $valueHolderfed2c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfed2c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfed2c;
    }
}

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
