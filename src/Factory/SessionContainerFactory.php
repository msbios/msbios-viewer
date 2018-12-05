<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Session\Container;

/**
 * Class SessionContainerFactory
 * @package MSBios\Viewer\Factory
 */
class SessionContainerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return object|Container
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new Container($requestedName);
    }
}
