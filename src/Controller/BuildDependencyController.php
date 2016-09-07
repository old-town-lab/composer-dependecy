<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Lab\ComposerDependency\Controller;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Zend\Mvc\Controller\AbstractConsoleController;


/**
 * Class BuildDependencyController
 *
 * @package OldTown\Lab\ComposerDependency\Controller
 */
class BuildDependencyController extends AbstractConsoleController
{
    use LoggerAwareTrait;

    /**
     * Возвращает логер
     *
     * @return LoggerInterface
     */
    public function getLogger()
    {
        if (null === $this->logger) {
            $this->logger = new NullLogger();
        }
        return $this->logger;
    }

    /**
     * Подготовить список зависимостей для модуля
     *
     */
    public function buildDependencyAction()
    {

    }
}
