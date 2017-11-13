<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

use MSBios\Resolver\AbstractResolverManager;
use MSBios\Resolver\ResolverInterface;

/**
 * Class WriterManager
 * @package MSBios\Viewer
 */
class WriterManager extends AbstractResolverManager
{
    /**
     * @param array ...$arguments
     * @return bool
     */
    public function resolve(...$arguments)
    {
        /** @var ResolverInterface $resolver */
        foreach ($this->queue as $resolver) {
            $resolver->resolve($arguments[0]);
        }
        return true;
    }
}
