<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Lab\ComposerDependency;

use OldTown\Lab\ComposerDependency\Controller;

return [
    'controllers' => [
        'factories' => [
            Controller\BuildDependencyController::class => Controller\BuildDependencyControllerFactory::class
        ]
    ]
];