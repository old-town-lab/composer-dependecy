<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
use OldTown\Lab\ComposerDependency\Module;
use Nnx\ModuleOptions\Module as ModuleOptions;


return [
    'modules' => [
        ModuleOptions::MODULE_NAME,
        Module::MODULE_NAME,
        
        'EnliteMonolog'

    ],
    'module_listener_options' => [
        'module_paths' => [
            __DIR__ . '/../'
        ],
        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ]
    ]

];
