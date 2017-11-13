<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

/**
 * Interface ViewerManagerInterface
 * @package MSBios\Viewer
 */
interface ViewerManagerInterface
{
    /**
     * @param ViewerableAwareInterface $viewer
     * @return mixed
     */
    public function watch(ViewerableAwareInterface $viewer);
}
