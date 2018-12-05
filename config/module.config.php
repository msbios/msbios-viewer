<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

use MSBios\Factory\ModuleFactory;

return [

    'service_manager' => [
        'factories' => [
            Module::class =>
                ModuleFactory::class,
            'ViewerSessionContainer' =>
                Factory\SessionContainerFactory::class,
            ViewerManager::class =>
                Factory\ViewerManagerFactory::class,
            ResolverManager::class =>
                Factory\ResolverManagerFactory::class,

            // listeners
            ListenerAggregate::class =>
                Factory\ListenerAggregateFactory::class
        ]
    ],

    Module::class => [

        /**
         * Container.
         *
         * Expects: string
         * Default: ViewerSessionContainer
         */
        'container' => 'ViewerSessionContainer',

        /**
         * Viewer resolvers.
         *
         * Expects: array
         * Default: [
         * ]
         */
        'viewer_resolvers' => [
            // ...
        ],
    ],

    'listeners' => [
        ListenerAggregate::class
    ]
];
