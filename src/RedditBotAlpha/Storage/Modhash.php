<?php
/**
 * Modhash.php
 * Storage class to store the modhash returned by an authenticated Reddit query.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Storage;

class Modhash extends AbstractStorage
{
    /**
     * Stores the modhash value.
     * TODO see if we can make this database-agnostic, kind of SQLite-centric.
     * 
     * @param string $user
     * @param string $hash
     * @return void
     */
    public function storeModhash($user, $hash) 
    {
        $this->getAdapter()->query('DELETE FROM `modhash` WHERE `user` = ?' , array($user));
        $this->getAdapter()
                ->query('INSERT INTO `modhash` (user, modhash) VALUES (?,?)',
                        array($user,$hash)); // TODO probably some better error handling
    }
    
    /**
     * Set up the table if necessary.
     * TODO this is also SQLite-centric.
     * 
     * @return void
     */
    public function initTable()
    {
        $adapter = $this->getAdapter();
        $adapter->query('CREATE TABLE modhash(user TEXT, modhash TEXT)',
                                Adapter::QUERY_MODE_EXECUTE);
    }
    
    /**
     * Returns the modhash for a given user.
     * 
     * @param string $user
     * @return array
     */
    public function getModhash($user) 
    {
        $result = $this->getAdapter($user)
                ->query('SELECT modhash FROM `modhash` WHERE user = ?', array($user));
        return $result->current(); // TODO same as above, better error handling
    }
}