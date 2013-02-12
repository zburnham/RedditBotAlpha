<?php
/**
 * Cookie.php
 * Storage for cookies we get back from Reddit.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Storage;

use Zend\Http\Header\SetCookie;

class Cookie extends AbstractStorage
{
    /**
     * Create table if necessary.
     * 
     * @return void
     */
    public function initTable()
    {
        $adapter = $this->getAdapter();
        $adapter->query('CREATE TABLE `cookies` (user TEXT, setcookie TEXT)',
                                Adapter::QUERY_MODE_EXECUTE);
    }
    
    /**
     * Write out cookies to database, associated with a particular user.
     * 
     * @param string $user
     * @param \Zend\Http\Header\SetCookie $cookies
     * @return void
     */
    public function storeCookies($user, SetCookie $cookies)
    {
        $adapter = $this->getAdapter();
        $adapter->query('DELETE FROM `cookies` WHERE `user` = ?', $user);
        $adapter->query('INSERT INTO `cookies` (user, setcookie) VALUES (?,?)', 
                $user, serialize($cookies)); // TODO better error handling here
    }
    
    /**
     * Fetch SetCookie object from database. 
     * 
     * @param string $user
     * @return SetCookie
     */
    public function getCookies($user)
    {
        $adapter = $this->getAdapter();
        $resultSet = $adapter->query('SELECT `setcookie` FROM `cookies` WHERE `user` = ?', $user);
        $return = $resultSet->current();
        return unserialize($return['setcookie']); // TODO similarly better error handling
    }
}