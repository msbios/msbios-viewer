<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\Viewer\ViewerManager;
use MSBios\Viewer\ViewerManagerAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class ViewerManagerInitializer
 * @package MSBios\Viewer\Initializer
 */
class ViewerManagerInitializer implements InitializerInterface
{
    /**
     * @param ContainerInterface $container
     * @param object $instance
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof ViewerManagerAwareInterface) {
            $instance->setViewerManager(
                $container->get(ViewerManager::class)
            );
        }
    }

    /**
     * @param $an_array
     * @return ViewerManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
