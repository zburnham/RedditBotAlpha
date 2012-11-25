<?php
/**
 * AbstractServiceClass.php
 * Base class for all Service classes.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Service;

use Zend\Db\TableGateway\TableGateway;
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
    
    /**
     * Database connection.
     *
     * @var TableGateway
     */
    protected $tableGateway;
    
    /**
     * Hydrates and returns the model object.
     * 
     * @param array $data
     * @return mixed
     */
    public function hydrate(array $data)
    {
        $this->getHydrator()->hydrate($data, $this->getModel());
        return $this->getModel();
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
    
    /**
     * @return TableGateway
     */
    public function getTableGateway()
    {
        return $this->tableGateway;
    }

    /**
     * @param \Zend\Db\TableGateway\TableGateway $tableGateway
     * @return \Createaccount\Service\AbstractServiceClass
     */
    public function setTableGateway(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
        return $this;
    }
}