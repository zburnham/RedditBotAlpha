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

class Login extends AbstractApiClass
{
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
     * Must be json for the style of auth used in this documentation.
     *
     * @var string
     */
    protected $api_type = 'json';
    
    /**
     * Calls the API.  Option to use SSL used here.
     */
    public function call()
    {
        $this->addPostVariable('user', $this->getUser());
        $this->addPostVariable('passwd', $this->getPasswd());
        $this->addPostVariable('api_type', $this->getApiType());
        if ($this->getUseSsl()) {
            $this->setProtocol('https://');
        }
        parent::call();
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