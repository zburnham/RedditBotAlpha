<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace RedditBotAlpha;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

use Zend\Http\Client as HttpClient;

use RedditBotAlpha\Controller;
use RedditBotAlpha\Http;
use RedditBotAlpha\Hydrator;
use RedditBotAlpha\Model;
use RedditBotAlpha\Service;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'listing' => function() {
                    return new Model\Listing;
                },
                'listing-service' => function($sm) {
                    $listingService = new Service\Listing;
                    $listingService->setModel($sm->get('listing'));
                    $listingService->setHydrator($sm->get('listing-hydrator'));
                    return $listingService;
                },
                'listing-hydrator' => function($sm) {
                    return new Hydrator\Listing;
                },
                'api-login' => function($sm) {
                    $login = new Service\API\Login;
                    $login->setHttpClient($sm->get('http-client'));
                    $uc = $sm->get('url-config');
                    $ac = $sm->get('account-config');
                    $login->setBaseUrl($uc['base']);
                    $login->setPath($uc['login'] . strtoupper($ac['user']));
                    $login->setUser($ac['user']);
                    $login->setPasswd($ac['passwd']);
                    return $login;
                },
                'url-config' => function() {
                    return include(__DIR__ . '/config/url.config.php');
                },
                'account-config' => function() {
                    return include(__DIR__ . '/config/account.config.php');
                },
//                'post' => function($sm) {
//                    $post = new Model\Post;
//                    return $post;
//                },
//                'url-config' => function () {
//                    return new Config(include __DIR__ . '/config/url.config.php' );
//                },
//                'subreddit' => function ($sm) {
//                    return new Model\Subreddit;
//                },
//                'redditRequest' => function ($sm) {
//                    $request = new Model\Request;
//                    $connection = $sm->get('connection');
//                    $request->setConnection($connection);
//                    $urls = $sm->get('url-config')->get('urls');
//                    $request->setUrls($urls);
//                    return $request;
//                },
//                'connection' => function ($sm) {
//                    $connection = new Network\Connection;
//                    $parameters = $sm->get('url-config')->get('parameters');
//                    $connection->setParameters($parameters);
//                    return $connection;
//                },
//                'redditResponse' => function ($sm) {
//                    $response = new Model\Response;
//                    return $response;
//                },
                'http-client' => function () {
                    $hc = new Http\Client;
                    return $hc;
                },
//                'post-table-gateway' => 'tbd',
            ),
        );
    }
}
