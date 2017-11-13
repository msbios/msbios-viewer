<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

use MSBios\Resolver\ResolverManagerInterface;
use Zend\Session\Container;

/**
 * Class ViewerManager
 * @package MSBios\Viewer
 */
class ViewerManager implements ViewerManagerInterface
{
    /** @var ResolverManagerInterface */
    protected $readerManager;

    /** @var  ResolverManagerInterface */
    protected $writerManager;

    /**
     * ViewerManager constructor.
     * @param ResolverManagerInterface $readerManager
     * @param ResolverManagerInterface $writerManager
     */
    public function __construct(
        ResolverManagerInterface $readerManager,
        ResolverManagerInterface $writerManager
    )
    {
        $this->readerManager = $readerManager;
        $this->writerManager = $writerManager;
    }

    /**
     * @param ViewerableAwareInterface $viewer
     * @return bool|mixed
     */
    public function watch(ViewerableAwareInterface $viewer)
    {
        if (!$this->readerManager->resolve($viewer)) {
            return $this->writerManager->resolve($viewer);
        }
        return false;
    }
}
