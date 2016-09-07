<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Lab\ComposerDependency\Options;

use Zend\Stdlib\AbstractOptions;
use Nnx\ModuleOptions\ModuleOptionsInterface;


/**
 * Class ModuleOptions
 *
 * @package OldTown\GitLabTools\Analizator\Options
 */
class ModuleOptions extends AbstractOptions implements ModuleOptionsInterface
{
    /**
     * Имя используемого логера
     *
     * @var string
     */
    private $logger;

    /**
     * Имя используемого логера
     *
     * @return string
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * Имя используемого логера
     *
     * @param string $logger
     *
     * @return $this
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;

        return $this;
    }
}
