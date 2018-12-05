<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class ViewerManagerInitializer
 * @package MSBios\Viewer
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
