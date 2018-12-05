<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer\Controller\Plugin;

use MSBios\Viewer\ViewerableAwareInterface;
use MSBios\Viewer\ViewerManagerAwareInterface;
use MSBios\Viewer\ViewerManagerAwareTrait;
use MSBios\Viewer\ViewerManagerInterface;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class ViewerPlugin
 * @package MSBios\Viewer\Controller\Plugin
 */
class ViewerPlugin extends AbstractPlugin implements ViewerManagerAwareInterface
{
    use ViewerManagerAwareTrait;

    /**
     * ViewerManagerPlugin constructor.
     * @param ViewerManagerInterface $viewerManager
     */
    public function __construct(ViewerManagerInterface $viewerManager)
    {
        $this->setViewerManager($viewerManager);
    }

    /**
     * @param ViewerableAwareInterface $viewer
     * @return mixed
     */
    public function __invoke(ViewerableAwareInterface $viewer)
    {
        return $this
            ->getViewerManager()
            ->watch($viewer);
    }
}
