<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

/**
 * Trait ViewerableAwareTrait
 * @package MSBios\Viewer
 */
trait ViewerableAwareTrait
{
    /** @var int */
    protected $views = 0;

    /**
     * @return int
     */
    public function getViews(): int
    {
        return $this->views;
    }

    /**
     * @param int $views
     * @return $this
     */
    public function setViews(int $views)
    {
        $this->views = $views;
        return $this;
    }
}