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
     * Model instance.
     *
     * @var mixed
     */
    protected $model;
    
    /**
     * Hydrator class.
     *
     * @var HydratorInterface
     */
    protected $hydrator;
    
    public function hydrate($data)
    {
        $this->getHydrator()->hydrate($data, $this->getModel());
    }
    
    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     * @return \RedditBotAlpha\Service\AbstractServiceClass
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }
        
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