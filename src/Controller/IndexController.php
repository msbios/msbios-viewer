<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Viewer\Controller;

use MSBios\Viewer\ListenerAggregate;
use MSBios\Viewer\ViewerableAwareInterface;
use MSBios\Viewer\ViewerManagerAwareInterface;
use MSBios\Viewer\ViewerManagerAwareTrait;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ModelInterface;

/**
 * Class IndexController
 * @package MSBios\Viewer\Controller
 */
class IndexController extends AbstractActionController implements ViewerManagerAwareInterface
{
    use ViewerManagerAwareTrait;

    /**
     * @return ModelInterface
     */
    public function indexAction()
    {
        /** @var int $page */
        $page = $this->params()->fromQuery('page', 0);

        $double = \Mockery::mock(ViewerableAwareInterface::class);
        $double->allows()->getViewerIdentifier()->andReturns(
            sprintf('ViewerIdentifier[%s]', $page)
        );

        /** @var ModelInterface $viewManager */
        $viewManager = parent::indexAction();
        $viewManager->setVariables([
            // 'watched' => $this->getViewerManager()->watch($double),
            // 'watched' => $this->viewer($double),
            'double' => $double,
            'page' => $page
        ]);

        return $viewManager;
    }
}
