<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

use MSBios\Resolver\ResolverManagerInterface;

/**
 * Class ViewerManager
 * @package MSBios\Viewer
 */
class ViewerManager implements ViewerManagerInterface
{
    /** @var ResolverManagerInterface */
    protected $container;

    /** @var  ResolverManagerInterface */
    protected $resolverManager;

    /**
     * ViewerManager constructor.
     * @param Container $container
     * @param ResolverManagerInterface $resolverManager
     */
    public function __construct(Container $container, ResolverManagerInterface $resolverManager)
    {
        $this->container = $container;
        $this->resolverManager = $resolverManager;
    }

    /**
     * @param ViewerableAwareInterface $viewer
     * @return bool|mixed
     */
    public function watch(ViewerableAwareInterface $viewer)
    {
        /** @var string $identifier */
        $identifier = $viewer->getViewerIdentifier();
        if (! isset($this->container[$viewer->getViewerIdentifier()])) {
            $this->container[$identifier] = true; // Write to Session Container
            $this->resolverManager->resolve($viewer); // Push Do Something to Resolvers
            return true;
        }

        return false;
    }
}
