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
     * @param array ...$arguments
     * @return mixed
     */
    public function watch(...$arguments);
}
