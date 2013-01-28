<?php
/**
 * Modhash.php
 * Storage class to store the modhash returned by an authenticated Reddit query.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Storage;

class Modhash
{
    protected $adapter;
    
    public function storeModhash($user, $hash) 
    {
        // check for existing
        $result = $this->getAdapter()
                ->query('SELECT * FROM `modhash` WHERE `user` = ?', array($user));
        if (0 < $result->count()) {
            $this->getAdapter()->query('DELETE FROM `modhash` WHERE `user` = ?' , array($user));
        }
        $this->getAdapter()
                ->query('INSERT INTO `modhash` (user, modhash) VALUES (?,?)',
                        array($user,$hash)); // TODO probably some better error handling
    }
    
    public function getModhash($user) 
    {
        $result = $this->getAdapter($user)
                ->query('SELECT modhash FROM `modhash` WHERE user = ?', array($user));
        return $result->current(); // TODO same as above, better error handling
    }
    
    public function getAdapter()
    {
        return $this->adapter;
    }

    public function setAdapter($adapter)
    {
        $this->adapter = $adapter;
        return $this;
    }
}