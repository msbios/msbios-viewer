<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Viewer\ListenerAggregate;
use MSBios\Viewer\ViewerManager;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ListenerAggregateFactory
 * @package MSBios\Viewer\Factory
 */
class ListenerAggregateFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return ListenerAggregate|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ListenerAggregate($container->get(ViewerManager::class));
    }
}