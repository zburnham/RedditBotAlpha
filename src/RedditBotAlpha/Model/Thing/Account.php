<?php
/**
 * Account.php
 * Model for the 'account' Reddit data type.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model\Thing;

use RedditBotAlpha\Model\Thing;

class Account extends Thing
{
    /**
     * No description given
     *
     * @var int 
     */
    protected $comment_karma;
    
    /**
     * No description given
     * 
     * @var long 
     */
    protected $created;
    
    /**
     * No description given
     *
     * @var long
     */
    protected $created_utc;
    
    /**
     * does the user have unread mail?
     *
     * @var bool
     */
    protected $has_mail;
    
    /**
     * No description given
     *
     * @var bool
     */
    protected $has_mod_mail;
    
    /**
     * No description given
     *
     * @var string
     */
    protected $id;
    
    /**
     * No description given
     *
     * @var bool
     */
    protected $is_gold;
    
    /**
     * No description given
     *
     * @var bool
     */
    protected $is_mod;
    
    /**
     * No description given
     *
     * @var int
     */
    protected $link_karma;
    
    /**
     * No description given
     *
     * @var string
     */
    protected $modhash;
    
    /**
     * The username of the account in question. 
     * This attribute overrides the superclass's name attribute. 
     * Do not confuse an account's name which is the account's username with a thing's 
     * name which is the thing's FULLNAME. See API: Glossary for details on what 
     * FULLNAMEs are.  (https://github.com/zburnham/reddit/wiki/API)
     *
     * @var string
     */
    protected $name;
    
    /**
     * @return int
     */
    public function getCommentKarma()
    {
        return $this->comment_karma;
    }

    /**
     * @param int $comment_karma
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setCommentKarma($comment_karma)
    {
        $this->comment_karma = $comment_karma;
        return $this;
    }

    /**
     * @return long
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param long $created
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return long
     */
    public function getCreatedUtc()
    {
        return $this->created_utc;
    }

    /**
     * @param long $created_utc
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setCreatedUtc($created_utc)
    {
        $this->created_utc = $created_utc;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasMail()
    {
        return $this->has_mail;
    }

    /**
     * @param bool $has_mail
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setHasMail($has_mail)
    {
        $this->has_mail = $has_mail;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasModMail()
    {
        return $this->has_mod_mail;
    }

    /**
     * @param bool $has_mod_mail
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setHasModMail($has_mod_mail)
    {
        $this->has_mod_mail = $has_mod_mail;
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
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsGold()
    {
        return $this->is_gold;
    }

    /**
     * 
     * @param bool $is_gold
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setIsGold($is_gold)
    {
        $this->is_gold = $is_gold;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMod()
    {
        return $this->is_mod;
    }

    /**
     * @param bool $is_mod
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setIsMod($is_mod)
    {
        $this->is_mod = $is_mod;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkKarma()
    {
        return $this->link_karma;
    }

    /**
     * @param int $link_karma
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setLinkKarma($link_karma)
    {
        $this->link_karma = $link_karma;
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
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setModhash($modhash)
    {
        $this->modhash = $modhash;
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
     * @return \RedditBotAlpha\Model\Thing\Account
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}