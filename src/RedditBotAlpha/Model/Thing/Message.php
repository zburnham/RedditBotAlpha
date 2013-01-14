<?php
/**
 * Message.php
 * Model for the 'message' Reddit data type.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model\Thing;

use RedditBotAlpha\Model\Thing;

class Message extends Thing
{
    /**
     * (no description given)
     * 
     * @var string
     */
    protected $author;
    
    /**
     * (no description given)
     *
     * @var string
     */
    protected $body;
    
    /**
     * (no description given)
     *
     * @var string
     */
    protected $body_html;
    
    /**
     * does not seem to return null but an empty string instead.
     *
     * @var string
     */
    protected $context;
    
    /**
     * (no description given) ? (This returns itself?)
     *
     * @var Message
     */
    protected $first_message;
    
    /**
     * ex: "t4_8xwlg"
     *
     * @var string
     */
    protected $name;
    
    /**
     * unread? not sure
     *
     * @var bool
     */
    protected $new;
    
    /**
     * null if no parent is attached
     *
     * @var string
     */
    protected $parent_id;
    
    /**
     * Again, an empty string if there are no replies.
     *
     * @var string
     */
    protected $replies;
    
    /**
     * subject of message
     *
     * @var string
     */
    protected $subject;
    
    /**
     * null if not a comment.
     *
     * @var string
     */
    protected $subreddit;
    
    /**
     * (no description given)
     *
     * @var bool
     */
    protected $was_comment;
    
    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getBody_html()
    {
        return $this->body_html;
    }

    /**
     * @param string $body_html
     */
    public function setBody_html($body_html)
    {
        $this->body_html = $body_html;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return unknown
     */
    public function getFirst_message()
    {
        return $this->first_message;
    }

    /**
     * @param unknown $first_message
     */
    public function setFirst_message($first_message)
    {
        $this->first_message = $first_message;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * @param bool $new
     */
    public function setNew(bool $new)
    {
        $this->new = $new;
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     */
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @return string
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * @param string$replies
     */
    public function setReplies($replies)
    {
        $this->replies = $replies;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getSubreddit()
    {
        return $this->subreddit;
    }

    /**
     * @param string $subreddit
     */
    public function setSubreddit($subreddit)
    {
        $this->subreddit = $subreddit;
    }

    /**
     * @return bool
     */
    public function getWasComment()
    {
        return $this->was_comment;
    }

    /**
     * @param bool $wasComment
     */
    public function setWasComment($wasComment)
    {
        $this->was_comment = $wasComment;
    }
}