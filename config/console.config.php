<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Lab\ComposerDependency;

use OldTown\Lab\ComposerDependency\Controller\BuildDependencyController;

return [
    'console' => [
        'router' => [
            'routes' => [
                'buildDependencyComposer' => [
                    'type'          => 'simple',
                    'options' => [
                        'route'    => 'composer-dependency build [--path=]',
                        'defaults' => [
                            'controller' => BuildDependencyController::class,
                            'action'     => 'buildDependency'
                        ],
                    ],
                ],
            ]
        ]
    ],
];