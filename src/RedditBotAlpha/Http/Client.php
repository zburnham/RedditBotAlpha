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
    const CUSTOM_USER_AGENT = 'Happy Joy Reddit Bot by zburnham';
    
    public function __construct($uri = null, $options = null)
    {
        
        parent::__construct($uri, $options);
        
        $this->setHeaders(array('User-Agent' => self::CUSTOM_USER_AGENT));
    }
}