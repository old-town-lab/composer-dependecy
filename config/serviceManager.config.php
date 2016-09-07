<?php
/**
 * @link    https://github.com/old-town-lab/composer-dependency
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Lab\ComposerDependency;

use Zend\Cache\Service\StorageCacheAbstractServiceFactory;


return [
    'service_manager' => [
        'invokables'         => [


        ],
        'factories'          => [


        ],
        'abstract_factories' => [
            StorageCacheAbstractServiceFactory::class => StorageCacheAbstractServiceFactory::class,

        ]
    ]
];
