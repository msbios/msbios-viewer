<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

use MSBios\Resolver\AbstractResolverManager;
use MSBios\Resolver\ResolverInterface;

/**
 * Class ReaderManager
 * @package MSBios\Viewer
 */
class ReaderManager extends AbstractResolverManager
{
    /**
     * @param array ...$arguments
     * @return $this|mixed
     */
    public function resolve(...$arguments)
    {
        /** @var ResolverInterface $resolver */
        foreach ($this->queue as $resolver) {
            if ($resolver->resolve($arguments[0])) {
                return true;
            }
        }
        return false;
    }
}
