<?php
/**
 * Votable.php
 * Interface to emulate Votable implementation.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model\Thing\Interfaces;

interface Votable
{
    /**
     * @return int;
     */
    public function getUps();
    
    /**
     * @param int $int
     */
    public function setUps($int);
    
    /**
     * @return int
     */
    public function getDowns();
    
    /**
     * @param int $int
     */
    public function setDowns($int);

    /**
     * @return bool
     */
    public function getLikes();
    
    /**
     * @param bool $bool
     */
    public function setLikes($bool);
}