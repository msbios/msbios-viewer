<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

/**
 * Interface ViewerableAwareInterface
 * @package MSBios\Viewer
 */
interface ViewerableAwareInterface
{
    /**
     * @return string
     */
    public function getViewerIdentifier(): string;

    /**
     * @return int
     */
    public function getViews(): int;

    /**
     * @param int $views
     * @return $this
     */
    public function setViews(int $views);
}
