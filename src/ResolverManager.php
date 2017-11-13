<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

use MSBios\Resolver\AbstractResolverManager;
use MSBios\Resolver\ResolverInterface;

/**
 * Class ResolverManager
 * @package MSBios\Viewer
 */
class ResolverManager extends AbstractResolverManager
{
    /**
     * @param array ...$arguments
     * @return $this|mixed
     */
    public function resolve(...$arguments)
    {
        /** @var ResolverInterface $resolver */
        foreach ($this->queue as $resolver) {
            if ($resource = $resolver->resolve($arguments)) {
                return $resource;
            }
        }

        return $this;
    }
}
