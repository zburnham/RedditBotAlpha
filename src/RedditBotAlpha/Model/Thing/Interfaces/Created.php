<?php
/**
 * Created.php
 * Interface to emulate Created implementation.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model\Thing\Interfaces;

interface Created
{
    /**
     * @return decimal
     */
    public function getCreated();
    
    /**
     * @param decimal $decimal
     */
    public function setCreated($decimal);
    
    /**
     * @return decimal
     */
    public function getCreated_utc();
    
    /**
     * @param decimal $decimal
     */
    public function setCreated_utc($decimal);
}