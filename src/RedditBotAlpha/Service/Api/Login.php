<?php
/**
 * Login.php
 * Wrapper for the Reddit 'login' API call.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Service\API;

use RedditBotAlpha\Service\Api\AbstractApiClass;

use Zend\ServiceManager\ServiceManager;

class Login extends AbstractApiClass
{
    /**
     * ServiceManager instance.
     *
     * @var ServiceManager
     */
    protected $sm;
    
    /**
     * Reddit supports SSL login.
     *
     * @var bool
     */
    protected $use_ssl = FALSE;
    
    /**
     * The username to authenticate as. This is redundant, but required.
     *
     * @var string
     */
    protected $user;
    
    /**
     * The plain-text password for the account.
     *
     * @var string
     */
    protected $passwd;
    
    /**
     * rem specifies whether or not the session cookie returned should last beyond 
     * the current browser session (that is, if rem is True the cookie will have 
     * an explicit expiration far in the future indicating that it is not a session cookie.)
     *
     * @var bool
     */
    protected $rem;
    
    /**
     * Must be json for the style of auth used in this documentation.
     *
     * @var string
     */
    protected $api_type = 'json';
    
    /**
     * Calls the API.  Option to use SSL used here.
     * 
     * @return Login
     */
    public function call()
    {
        $this->addPostVariable('user', $this->getUser());
        $this->addPostVariable('passwd', $this->getPasswd());
        $this->addPostVariable('api_type', $this->getApiType());
        if ($this->getUseSsl()) {
            $this->setProtocol('https://');
        }
        $response = parent::call();
        $decodedResponse = $this->getDecodedResponse();
//        die(var_dump($decodedResponse));
        $this->getSm()->get('modhash-storage')
                ->storeModhash($this->getUser(), 
                        $decodedResponse->data->modhash);
        return $response;
    }
    
    /**
     * @return ServiceManager
     */
    public function getSm()
    {
        return $this->sm;
    }

    /**
     * @param \Zend\ServiceManager\ServiceManager $sm
     * @return \RedditBotAlpha\Service\API\Login
     */
    public function setSm(ServiceManager $sm)
    {
        $this->sm = $sm;
        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return \RedditBotAlpha\Service\API\Login
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * @param string $passwd
     * @return \RedditBotAlpha\Service\API\Login
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getRem()
    {
        return $this->rem;
    }

    /**
     * @param bool $rem
     * @return \RedditBotAlpha\Service\API\Login
     */
    public function setRem($rem)
    {
        $this->rem = $rem;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiType()
    {
        return $this->api_type;
    }

    /**
     * @param string $api_type
     * @return \RedditBotAlpha\Service\API\Login
     */
    public function setApiType($api_type)
    {
        $this->api_type = $api_type;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseSsl()
    {
        return $this->use_ssl;
    }

    /**
     * @param bool $use_ssl
     */
    public function setUseSsl(bool $use_ssl)
    {
        $this->use_ssl = $use_ssl;
    }
}