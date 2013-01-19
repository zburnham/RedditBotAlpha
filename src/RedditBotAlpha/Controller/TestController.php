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
        $hc->setUri('http://www.reddit.com/r/all/.json');
        $hc->setMethod('GET');
        $response = $hc->send();
        
        $listingData = json_decode($response->getBody(), true);
        $ls = $this->getServiceLocator()->get('listing-service');
        $listing = $ls->hydrate($listingData);
        
        $view = new ViewModel(array('listing' => $listing));
        
        $view->setTerminal(TRUE);
        
        return $view;
    }
    
    public function getchildrenAction()
    {
        
    }
    
    public function loginAction()
    {
        $login = $this->getServiceLocator()->get('api-login');
        $response = $login->call();
        $view = new ViewModel(array('response' => $response->getDecodedResponse()));
        return $view;
    }
}
