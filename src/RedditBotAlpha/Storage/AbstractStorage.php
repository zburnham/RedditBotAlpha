<?php
/**
 * Abstract.php
 * Abstract storage class.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Storage;

use Zend\Db\Adapter\Adapter;

class AbstractStorage
{
    /**
     * Database adapter.
     *
     * @var Adapber
     */
    protected $adapter;
    
    /**
     * @return Adapter
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * @param Adapter $adapter
     * @return \RedditBotAlpha\Storage\Modhash
     */
    public function setAdapter(Adapter $adapter)
    {
        $this->adapter = $adapter;
        return $this;
    }
}