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
class ViewerManager
{
    /** @var ResolverManagerInterface */
    protected $resolverManager;

    /**
     * ViewerManager constructor.
     * @param ResolverManagerInterface $resolverManager
     */
    public function __construct(ResolverManagerInterface $resolverManager)
    {
        $this->resolverManager = $resolverManager;
    }

    /**
     * @param array ...$arguments
     * @return $this
     */
    public function watch(...$arguments)
    {
        if ($this->resolverManager->resolve($arguments)) {

        }
        return $this;
    }
}
