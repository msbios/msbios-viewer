<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer;

/**
 * Trait ViewerManagerAwareTrait
 * @package MSBios\Assetic
 */
trait ViewerManagerAwareTrait
{
    /** @var ViewerManagerInterface */
    protected $viewerManager;

    /**
     * @return ViewerManagerInterface
     */
    public function getViewerManager(): ViewerManagerInterface
    {
        return $this->viewerManager;
    }

    /**
     * @param ViewerManagerInterface $viewerManager
     * @return $this
     */
    public function setViewerManager(ViewerManagerInterface $viewerManager)
    {
        $this->viewerManager = $viewerManager;
        return $this;
    }
}