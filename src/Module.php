<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 * @link https://github.com/RWOverdijk/AssetManager
 */
namespace MSBios\Viewer;

use Interop\Container\ContainerInterface;
use MSBios\ModuleInterface;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

/**
 * Class Module
 * @package MSBios\Assetic
 */
class Module implements ModuleInterface, AutoloaderProviderInterface, ServiceProviderInterface
{
    /** @const VERSION */
    const VERSION = '1.0.8';

    /**
     * @inheritdoc
     *
     * @return array|mixed|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return [
            'factories' => [
                ViewerManager::class => function (ContainerInterface $container) {
                    return new ViewerManager(
                        $container->get($container->get(Module::class)['container']),
                        $container->get(ResolverManager::class)
                    );
                },
            ]
        ];
    }
}
