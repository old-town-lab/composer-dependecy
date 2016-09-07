<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Lab\ComposerDependency;

use Monolog\Handler;
use Monolog\Logger;
use Monolog\Formatter;

return [
    'EnliteMonolog' => [
        'oldTownLabComposerDependencyConsole' => [
            'handlers' => [
                'streamHandler' => [
                    'name'      => Handler\StreamHandler::class,
                    'args'      => [
                        'stream' => 'php://stdout',
                        'level'  => Logger::DEBUG
                    ],
                    'formatter' => [
                        'name' => Formatter\LogstashFormatter::class,
                        'args' => [
                            'application' => 'ComposerDependency',
                        ]
                    ]
                ],

            ],

        ]
    ]
];