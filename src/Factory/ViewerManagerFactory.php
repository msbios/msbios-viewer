<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Viewer\ViewerManager;
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
     * @return mixed|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new $requestedName($container->get(ViewerManager::class));
    }
}
