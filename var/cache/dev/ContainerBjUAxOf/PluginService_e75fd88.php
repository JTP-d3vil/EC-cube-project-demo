<?php

namespace ContainerBjUAxOf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';

class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Service\PluginService|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd15d2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3c7d1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties53dd5 = [
        
    ];

    public function install($path, $source = 0)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->install($path, $source);
    }

    public function installWithCode($code)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'installWithCode', array('code' => $code), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->installWithCode($code);
    }

    public function preInstall()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'preInstall', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->preInstall();
    }

    public function postInstall($config, $source)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->postInstall($config, $source);
    }

    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }

    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }

    public function createTempDir()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createTempDir', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createTempDir();
    }

    public function deleteDirs($arr)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'deleteDirs', array('arr' => $arr), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->deleteDirs($arr);
    }

    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->unpackPluginArchive($archive, $dir);
    }

    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->checkPluginArchiveContent($dir, $config_cache);
    }

    public function readConfig($pluginDir)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->readConfig($pluginDir);
    }

    public function checkSymbolName($string)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'checkSymbolName', array('string' => $string), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->checkSymbolName($string);
    }

    public function deleteFile($path)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'deleteFile', array('path' => $path), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->deleteFile($path);
    }

    public function checkSamePlugin($code)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'checkSamePlugin', array('code' => $code), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->checkSamePlugin($code);
    }

    public function calcPluginDir($code)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'calcPluginDir', array('code' => $code), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->calcPluginDir($code);
    }

    public function createPluginDir($d)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'createPluginDir', array('d' => $d), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->createPluginDir($d);
    }

    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->registerPlugin($meta, $source);
    }

    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->callPluginManagerMethod($meta, $method);
    }

    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->uninstall($plugin, $force);
    }

    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'unregisterPlugin', array('p' => $p), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->unregisterPlugin($p);
    }

    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'disable', array('plugin' => $plugin), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->disable($plugin);
    }

    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->enable($plugin, $enable);
    }

    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->update($plugin, $path);
    }

    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->updatePlugin($plugin, $meta);
    }

    public function getPluginRequired($plugin)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getPluginRequired($plugin);
    }

    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->findDependentPluginNeedDisable($pluginCode);
    }

    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->findDependentPlugin($pluginCode, $enableOnly);
    }

    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->getDependentByCode($pluginCode, $libraryType);
    }

    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->parseToComposerCommand($packages, $getVersion);
    }

    public function copyAssets($pluginCode)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->copyAssets($pluginCode);
    }

    public function removeAssets($pluginCode)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->removeAssets($pluginCode);
    }

    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return $this->valueHolderd15d2->checkPluginExist($plugins, $pluginCode);
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

        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);

        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);

        $instance->initializer3c7d1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;

        if (! $this->valueHolderd15d2) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolderd15d2 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);

        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);

        }

        $this->valueHolderd15d2->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }

    public function & __get($name)
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__get', ['name' => $name], $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        if (isset(self::$publicProperties53dd5[$name])) {
            return $this->valueHolderd15d2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd15d2;

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

        $targetObject = $this->valueHolderd15d2;
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
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd15d2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd15d2;
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
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__isset', array('name' => $name), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd15d2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd15d2;
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
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__unset', array('name' => $name), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd15d2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd15d2;
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
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__clone', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        $this->valueHolderd15d2 = clone $this->valueHolderd15d2;
    }

    public function __sleep()
    {
        $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, '__sleep', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;

        return array('valueHolderd15d2');
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
        $this->initializer3c7d1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3c7d1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3c7d1 && ($this->initializer3c7d1->__invoke($valueHolderd15d2, $this, 'initializeProxy', array(), $this->initializer3c7d1) || 1) && $this->valueHolderd15d2 = $valueHolderd15d2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd15d2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd15d2;
    }
}

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
