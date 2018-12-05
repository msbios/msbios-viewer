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
            ResolverManager::class =>
                Factory\ResolverManagerFactory::class,
        ]
    ],

    'controller_plugins' => [
        'factories' => [
            Controller\Plugin\ViewerPlugin::class =>
                Factory\ViewerManagerFactory::class
        ],
        'aliases' => [
            'viewer' => Controller\Plugin\ViewerPlugin::class
        ]
    ],

    'view_helpers' => [
        'factories' => [
            View\Helper\ViewerHelper::class =>
                Factory\ViewerManagerFactory::class
        ],
        'aliases' => [
            'viewer' => View\Helper\ViewerHelper::class
        ],
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
];
