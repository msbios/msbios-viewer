<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer;

use Zend\EventManager\AbstractListenerAggregate;
use Zend\EventManager\EventInterface;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\Mvc\MvcEvent;

/**
 * Class ListenerAggregate
 * @package MSBios\Viewer
 */
class ListenerAggregate extends AbstractListenerAggregate
{
    /** @const EVENT_VIEW */
    const EVENT_VIEW = 'EVENT_VIEW';

    /** @var ViewerManagerInterface */
    protected $viewerManager;

    /**
     * ListenerAggregate constructor.
     * @param ViewerManagerInterface $viewerManager
     */
    public function __construct(ViewerManagerInterface $viewerManager)
    {
        $this->viewerManager = $viewerManager;
    }

    /**
     * @inheritdoc
     *
     * @param EventManagerInterface $events
     * @param int $priority
     */
    public function attach(EventManagerInterface $events, $priority = 1)
    {
        $this->listeners[] = $events
            ->attach(MvcEvent::EVENT_DISPATCH, [$this, 'onDispatch'], $priority);
    }

    /**
     * @param EventInterface $event
     */
    public function onDispatch(EventInterface $event)
    {
        /** @var EventManagerAwareInterface $target */
        $target = $event->getTarget();
        $target
            ->getEventManager()
            ->attach(self::EVENT_VIEW, [$this, 'onView'], -100);
    }

    /**
     * @param EventInterface $event
     */
    public function onView(EventInterface $event)
    {
        echo __METHOD__; die();
    }
}