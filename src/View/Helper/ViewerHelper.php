<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer\View\Helper;

use MSBios\Viewer\ViewerableAwareInterface;
use MSBios\Viewer\ViewerManagerAwareInterface;
use MSBios\Viewer\ViewerManagerAwareTrait;
use MSBios\Viewer\ViewerManagerInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * Class ViewerHelper
 * @package MSBios\Viewer\View\Helper
 */
class ViewerHelper extends AbstractHelper implements ViewerManagerAwareInterface
{
    use ViewerManagerAwareTrait;

    /**
     * ViewerManagerHelper constructor.
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
