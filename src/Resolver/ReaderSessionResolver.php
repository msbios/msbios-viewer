<?php
/**
 * @access protected
 * @author J
 */
namespace MSBios\Viewer\Resolver;

use MSBios\Resolver\ResolverInterface;
use MSBios\Viewer\ViewerManager;
use Zend\Session\Container;

/**
 * Class ReaderSessionResolver
 * @package MSBios\Viewer\Resolver
 */
class ReaderSessionResolver implements ResolverInterface
{
    /**
     * @param array ...$arguments
     * @return bool
     */
    public function resolve(...$arguments)
    {
        /** @var string $identifier */
        $identifier = $arguments[0]->getViewerIdentifier();
        /** @var Container $container */
        $container = new Container(ViewerManager::class);
        return isset($container[$identifier]);
    }
}