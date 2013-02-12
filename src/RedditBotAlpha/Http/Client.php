<?php
/**
 * Client.php
 * Extends Zend\Http\Client by specifying custom User-Agent header
 * 
 * @author zburnham
 * @version 0.0.1
 */
namespace RedditBotAlpha\Http;

use Zend\Http\Client as HttpClient;

class Client extends HttpClient
{
    /**
     * By Reddit request.
     */
    const CUSTOM_USER_AGENT = 'Happy Joy Reddit Bot by zburnham';
    
    /**
     * @var ServiceManager
     */
    protected $sm;
    
    /**
     * Class constructor. Maps to parent constructor.
     * Stores cookie.
     * 
     * @param string $uri
     * @param array $options
     */
    public function __construct($uri = null, $options = null)
    {
        parent::__construct($uri, $options);
        
        $this->setHeaders(array('User-Agent' => self::CUSTOM_USER_AGENT));
    }
    
    public function send()
    {
        $response = parent::send();
        $cookie = $response->getCookie();   
        return $response;   
    }
    
    /**
     * @return ServiceManager
     */
    public function getSm()
    {
        return $this->sm;
    }

    public function setSm(ServiceManager $sm)
    {
        $this->sm = $sm;
        return $this;
    }


}