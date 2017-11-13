<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Viewer\ReaderManager;
use MSBios\Viewer\ViewerManager;
use MSBios\Viewer\WriterManager;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ViewerManagerFactory
 * @package MSBios\Viewer\Factory
 */
class ViewerManagerFactory implements FactoryInterface
{

    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return ViewerManager
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ViewerManager(
            $container->get(ReaderManager::class),
            $container->get(WriterManager::class)
        );
    }
}