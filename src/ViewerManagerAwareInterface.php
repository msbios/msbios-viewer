<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer;

/**
 * Interface ViewerManagerAwareInterface
 * @package MSBios\Viewer
 */
interface ViewerManagerAwareInterface
{
    /**
     * @return ViewerManagerInterface
     */
    public function getViewerManager(): ViewerManagerInterface;

    /**
     * @param ViewerManagerInterface $viewerManager
     * @return $this
     */
    public function setViewerManager(ViewerManagerInterface $viewerManager);
}