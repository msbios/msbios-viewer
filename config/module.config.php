<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'service_manager' => [
        'factories' => [
            Module::class =>
                Factory\ModuleFactory::class,
            Container::class =>
                InvokableFactory::class,
            ViewerManager::class =>
                Factory\ViewerManagerFactory::class,
            ResolverManager::class =>
                Factory\ResolverManagerFactory::class,

            // Resolvers
            Resolver\ReaderSessionResolver::class =>
                InvokableFactory::class,
            Resolver\WriteSessionResolver::class =>
                InvokableFactory::class,

        ]
    ],

    Module::class => [

        /**
         * Container.
         *
         * Expects: string
         * Default: MSBios\Viewer\Container::class
         */
        'container' => Container::class,

        /**
         * Reader resolvers.
         *
         * Expects: array
         * Default: [
         * ]
         */
        'viewer_resolvers' => [
        ],
    ]
];
