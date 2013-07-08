<?php
/**
 * Thing.php
 * Model to store information obtained from Reddit.  Base class for all subdatatypes.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model;

class Thing
{
    /**
     * this item's identifier, e.g. "8xwlg"
     *
     * @var string 
     */
    protected $id;
    
    /**
     * Fullname of comment, e.g. "t1_c3v7f8u"
     *
     * @var string 
     */
    protected $name;
    
    /**
     * All things have a kind. The kind is a String identifier that denotes the 
     * object's type. Some examples: Listing, more, t1, t2
     *
     * @var string
     */
    protected $kind;
    
    /**
     * A custom data structure used to hold valuable information. This object's 
     * format will follow the data structure respective of its kind. 
     *
     * @var mixed 
     */
    protected $data;
    
    /**
     * The following three properties are part of a python interface called Votable.
     * Since php doesn't allow for properties in interfaces (and traits aren't available
     * in < php 5.4) we're just going to make them properties of the base Thing 
     * class and not use them if we don't need them.  There are interfaces with 
     * the method interfaces defined for both interfaces, but the properties need to be defined here.
     */

    /**
     * the number of upvotes. does this include one's own upvote?
     * 
     * @var int
     */
    protected $ups;

    /**
     * the number of downvote. does this include one's own downvote?
     *
     * @var int
     */
    protected $downs;
    
    /**
     * true if thing is liked by the user. false if thing is disliked. null if the 
     * user is neutral on the thing. Certain languages such as Java may need to 
     * use a boolean wrapper that supports null assignment.
     *
     * @var bool
     */
    protected $likes;
    
    /**
     * Next two properties are from the 'Created' python interface.  There are
     * question marks on these in the API documentation, they may go away.
     */
    
    /**
     * the localized time of creation. ex: "1331042771.0"
     *
     * @var decimal
     */
    protected $created;
    
    /**
     * the UTC time this item was created since the unix start time in seconds. 
     * "1331017571.0"
     *
     * @var decimal
     */
    protected $created_utc;
    
    /**
     * Default Interface implementations.
     */
    
    /**
     * @return int
     */
    public function getUps()
    {
        return $this->ups;
    }

    /**
     * @param int $ups
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setUps($ups)
    {
        $this->ups = $ups;
        return $this;
    }

    /**
     * @return int
     */
    public function getDowns()
    {
        return $this->downs;
    }

    /**
     * @param int $downs
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setDowns($downs)
    {
        $this->downs = $downs;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param bool $likes
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setLikes($likes)
    {
        $this->likes = (bool)$likes;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param decimal $created
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getCreatedUtc()
    {
        return $this->created_utc;
    }

    /**
     * @param decimal $createdUtc
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setCreatedUtc($createdUtc)
    {
        $this->created_utc = $createdUtc;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return \RedditBotAlpha\Model\Thing
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}