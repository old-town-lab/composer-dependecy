<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Lab\ComposerDependency\Controller;

use Assert\Assertion;
use Nnx\ModuleOptions\ModuleOptionsPluginManagerInterface;
use Psr\Log\LoggerInterface;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use OldTown\Lab\ComposerDependency\Options\ModuleOptions;


/**
 * Class BuildDependencyControllerFactory
 *
 * @package OldTown\Lab\ComposerDependency\Controller
 */
class BuildDependencyControllerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed|void
     * @throws \Assert\AssertionFailedException
     * @throws \Zend\ServiceManager\Exception\ServiceNotFoundException
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $appServiceLocator = $serviceLocator instanceof AbstractPluginManager ? $serviceLocator->getServiceLocator() : $serviceLocator;

        $controller = new BuildDependencyController();

        /** @var ModuleOptionsPluginManagerInterface $moduleOptionsPluginManager */
        $moduleOptionsPluginManager = $appServiceLocator->get(ModuleOptionsPluginManagerInterface::class);
        Assertion::isInstanceOf($moduleOptionsPluginManager, ModuleOptionsPluginManagerInterface::class, 'Invalid ModuleOptionsPluginManager');

        /** @var ModuleOptions $moduleOptions */
        $moduleOptions = $moduleOptionsPluginManager->get(ModuleOptions::class);
        Assertion::isInstanceOf($moduleOptions, ModuleOptions::class, 'Invalid moduleOptions');

        $loggerName = $moduleOptions->getLogger();
        if (null !== $loggerName) {
            /** @var LoggerInterface $logger */
            $logger = $appServiceLocator->get($loggerName);
            Assertion::isInstanceOf($logger, LoggerInterface::class, 'Invalid logger');
            $controller->setLogger($logger);
        }

        return $controller;
    }
}
