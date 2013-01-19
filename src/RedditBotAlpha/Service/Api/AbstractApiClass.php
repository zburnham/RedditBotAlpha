<?php
/**
 * Abstract.php
 * Abstract class to build API classes from.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Service\Api;

use RedditBotAlpha\Http\Client;
use Zend\ServiceManager\ServiceManager;

abstract class AbstractApiClass
{
    /**
     * HTTP client for sending the request.
     *
     * @var \Client
     */
    protected $http_client;
    
    /**
     * POST variables to be sent.
     *
     * @var array
     */
    protected $post;
    
    /**
     * The raw response back from Reddit.
     *
     * @var string
     */
    protected $raw_response;
    
    /**
     * JSON-decoded response.
     *
     * @var array
     */
    protected $decoded_response;
    
    /**
     * Communication protocol.
     *
     * @var string
     */
    protected $protocol = 'http://';
    
    /**
     * Base URL, eg 'www.reddit.com'.
     *
     * @var string
     */
    protected $base_url;
    
    /**
     * URL path for the API call.
     * 
     * @var string
     */
    protected $path;
    
    /**
     * ServiceManager instance.
     * 
     * @var ServiceManager
     */
    protected $sm;
    
    /**
     * Configuration values.
     *
     * @var array
     */
    protected $config;
    
    /**
     * Sends the request to Reddit.  Returns an array representing
     * the JSON-decoded response.
     *
     * TODO this should be refactored to use the Request instead of the Client
     * directly.
     * 
     * @return RedditBotAlpha\Service\Api\AbstractApiClass.php
     */
    public function call()
    {
        $client = $this->getHttpClient();
        $client->setMethod('POST');
        $url = '';
        $url .= $this->getProtocol();
        $url .= $this->getBaseUrl();
        $url .= $this->getPath();
        $client->setUri($url);
        $client->setParameterPost($this->getPost());
        $response = $client->send();
        $this->setRawResponse($response);
        $this->setDecodedResponse(json_decode($this->getRawResponse()->getBody()));
        return $this;
    }
    
    /**
     * @return Client
     */
    public function getHttpClient()
    {
        return $this->http_client;
    }

    /**
     * @param \RedditBotAlpha\Http\Client $http_client
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setHttpClient(Client $http_client)
    {
        $this->http_client = $http_client;
        return $this;
    }

    /**
     * @return array
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param array $post
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setPost(array $post)
    {
        $this->post = $post;
        return $this;
    }
    
    /**
     * Adds a variable to the POST array.
     * 
     * @param string $name
     * @param mixed $value
     */
    public function addPostVariable($name, $value)
    {
        $post = $this->getPost();
        $post[$name] = $value;
        $this->setPost($post);
    }

    /**
     * @return string
     */
    public function getRawResponse()
    {
        return $this->raw_response;
    }

    /**
     * @param string $raw_response
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setRawResponse($raw_response)
    {
        $this->raw_response = $raw_response;
        return $this;
    }

    /**
     * @return \stdClass
     */
    public function getDecodedResponse()
    {
        return $this->decoded_response;
    }

    /**
     * @param \stdClass $decoded_response
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setDecodedResponse(\stdClass $decoded_response)
    {
        $this->decoded_response = $decoded_response;
        return $this;
    }
    
    /**
     * @return ServiceManager
     */
    public function getSm()
    {
        return $this->sm;
    }

    /**
     * @param ServiceManager $sm
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setSm(ServiceManager $sm)
    {
        $this->sm = $sm;
        return $this;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $config
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setConfig(array $config)
    {
        $this->config = $config;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }

    /**
     * @param string $base_url
     * @return \RedditBotAlpha\Service\Api\AbstractApiClass
     */
    public function setBaseUrl($base_url)
    {
        $this->base_url = $base_url;
        return $this;
    }
}