<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Lab\ComposerDependency;



use Nnx\ModuleOptions\ModuleConfigKeyProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\DependencyIndicatorInterface;
use Nnx\ModuleOptions\Module as ModuleOptions;


/**
 * Class Module
 *
 * @package OldTown\Lab\ComposerDependency
 */
class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface,
    DependencyIndicatorInterface,
    ModuleConfigKeyProviderInterface
{
    /**
     * Имя секции в конфиги приложения отвечающей за настройки модуля
     *
     * @var string
     */
    const CONFIG_KEY = 'oldtown_lab_composer-dependency';

    /**
     * Имя модуля
     *
     * @var string
     */
    const MODULE_NAME = __NAMESPACE__;



    /**
     * @inheritDoc
     */
    public function getModuleDependencies()
    {
        return [
            ModuleOptions::MODULE_NAME
        ];
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getModuleConfigKey()
    {
        return static::CONFIG_KEY;
    }

    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/',
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getConfig()
    {
        return array_merge_recursive(
            include __DIR__ . '/config/module.config.php',
            include __DIR__ . '/config/controller.config.php',
            include __DIR__ . '/config/serviceManager.config.php',
            include __DIR__ . '/config/console.config.php',
            include __DIR__ . '/config/enliteMonolog.config.php',
            include __DIR__ . '/config/viewManager.config.php'
        );
    }

} 