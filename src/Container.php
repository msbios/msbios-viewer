<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer;

use Zend\Session\Container as DefaultContainer;
use Zend\Session\ManagerInterface;

/**
 * Class Container
 * @package MSBios\Viewer
 */
class Container extends DefaultContainer
{
    /**
     * Container constructor.
     * @param null|string $name
     * @param ManagerInterface|null $manager
     */
    public function __construct($name = __CLASS__, ManagerInterface $manager = null)
    {
        parent::__construct($name, $manager);
    }
}
