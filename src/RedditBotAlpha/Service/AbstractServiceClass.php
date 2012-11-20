<?php
/**
 * AbstractServiceClass.php
 * Base class for all Service classes.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Service;

use Zend\Stdlib\Hydrator\HydratorInterface;

class AbstractServiceClass
{
    /**
     * Hydrator class.
     *
     * @var HydratorInterface
     */
    protected $hydrator;
    
    /**
     * @return HydratorInterface
     */
    public function getHydrator()
    {
        return $this->hydrator;
    }

    /**
     * @param \Zend\Stdlib\Hydrator\HydratorInterface $hydrator
     * @return \RedditBotAlpha\Service\AbstractServiceClass
     */
    public function setHydrator(HydratorInterface $hydrator)
    {
        $this->hydrator = $hydrator;
        return $this;
    }
}