<?php
/**
 * Subreddit.php
 * Model for the "subreddit" Reddit data structure.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model\Thing;

use RedditBotAlpha\Model\Thing;

class Subreddit extends Thing
{
    /**
     * (no description given)
     *
     * @var string
     */
    protected $description;
    
    /**
     * (no description given)
     *
     * @var string
     */
    protected $display_name;
    
    /**
     * is_nsfw?
     *
     * @var bool
     */
    protected $over18;
    
    /**
     * the number of redditors subscribed to this subreddit
     *
     * @var int 
     * (the docs specify a long, but I have no idea why, you can't have a 
     * partial subscriber.)
     */
    protected $subscribers;
    
    /**
     * (no description given)
     *
     * @var string
     */
    protected $title;
    
    /**
     * The relative URL of the subreddit. Ex: "/r/pics/"
     *
     * @var string
     */
    protected $url;
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 
     * @param string $description
     * @return \RedditBotAlpha\Model\Thing\Subreddit
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * @param string $displayName
     * @return \RedditBotAlpha\Model\Thing\Subreddit
     */
    public function setDisplayName($displayName)
    {
        $this->display_name = $displayName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOver18()
    {
        return $this->over18;
    }

    /**
     * @param bool $over18
     * @return \RedditBotAlpha\Model\Thing\Subreddit
     */
    public function setOver18($over18)
    {
        $this->over18 = $over18;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }

    /**
     * @param int $subscribers
     * @return \RedditBotAlpha\Model\Thing\Subreddit
     */
    public function setSubscribers($subscribers)
    {
        $this->subscribers = $subscribers;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return \RedditBotAlpha\Model\Thing\Subreddit
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return \RedditBotAlpha\Model\Thing\Subreddit
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}