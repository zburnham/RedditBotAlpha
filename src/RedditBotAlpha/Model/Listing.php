<?php
/**
 * Listing.php
 * Reddit "Listing" data structure.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model;

class Listing
{
    /**
     * The fullname of the listing that follows before this page. null if there is no previous page.
     * 
     * @var string 
     */
    protected $before;
    
    /**
     * The fullname of the listing that follows after this page. null if there is no next page.
     *
     * @var string
     */
    protected $after;
    
    /**
     * This modhash is not the same modhash provided upon login. You do not need 
     * to update your user's modhash everytime you get a new modhash. You can 
     * reuse the modhash given upon login.
     *
     * @var string 
     */
    protected $modhash;
    
    /**
     * A list of things that this Listing wraps.
     *
     * @var array 
     */
    protected $data;
    
    /**
     * @return string
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * @param string $before
     * @return \RedditBotAlpha\Model\Listing
     */
    public function setBefore($before)
    {
        $this->before = $before;
        return $this;
    }

    /**
     * @return string
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * @param string $after
     * @return \RedditBotAlpha\Model\Listing
     */
    public function setAfter($after)
    {
        $this->after = $after;
        return $this;
    }

    /**
     * @return string
     */
    public function getModhash()
    {
        return $this->modhash;
    }

    /**
     * @param string $modhash
     * @return \RedditBotAlpha\Model\Listing
     */
    public function setModhash($modhash)
    {
        $this->modhash = $modhash;
        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return \RedditBotAlpha\Model\Listing
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}