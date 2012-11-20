<?php
/**
 * Testing controller.
 */
?>
<?php

namespace RedditBotAlpha\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TestController extends AbstractActionController
{
    public function indexAction()
    {
        $hc = $this->getServiceLocator()->get('http-client');
        $hc->setUri('http://www.reddit.com/r/pics/.json');
        $hc->setMethod('GET');
        $response = $hc->send();
        
        
        $view = new ViewModel(array('body' => json_decode($response->getBody())));
        $view->setTerminal(TRUE);
        
        return $view;
    }
}
