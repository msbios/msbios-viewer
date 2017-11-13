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
            ViewerManager::class =>
                Factory\ViewerManagerFactory::class,
            ReaderManager::class =>
                Factory\ReaderManagerFactory::class,
            WriterManager::class =>
                Factory\WriterManagerFactory::class,

            // Resolvers
            Resolver\ReaderSessionResolver::class =>
                InvokableFactory::class,
            Resolver\WriteSessionResolver::class =>
                InvokableFactory::class,

        ]
    ],

    Module::class => [

        /**
         * Reader resolvers.
         *
         * Expects: array
         * Default: [
         *     Resolver\ReaderSessionResolver::class => 100
         * ]
         */
        'reader_resolvers' => [
            Resolver\ReaderSessionResolver::class => 100
        ],

        /**
         * Writer resolvers.
         *
         * Expects: array
         * Default: [
         *     Resolver\WriteSessionResolver::class => 100
         * ]
         */
        'write_resolvers' => [
            Resolver\WriteSessionResolver::class => 100
        ]
    ]
];
