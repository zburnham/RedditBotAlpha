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
    protected $author;
    protected $body;
    protected $body_html;
    protected $context;
    protected $first_message;
    protected $name;
    protected $new;
    protected $parent_id;
    protected $replies;
    protected $subject;
    protected $subreddit;
    protected $was_comment;
    
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody_html()
    {
        return $this->body_html;
    }

    public function setBody_html($body_html)
    {
        $this->body_html = $body_html;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function setContext($context)
    {
        $this->context = $context;
    }

    public function getFirst_message()
    {
        return $this->first_message;
    }

    public function setFirst_message($first_message)
    {
        $this->first_message = $first_message;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNew()
    {
        return $this->new;
    }

    public function setNew($new)
    {
        $this->new = $new;
    }

    public function getParent_id()
    {
        return $this->parent_id;
    }

    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;
    }

    public function getReplies()
    {
        return $this->replies;
    }

    public function setReplies($replies)
    {
        $this->replies = $replies;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getSubreddit()
    {
        return $this->subreddit;
    }

    public function setSubreddit($subreddit)
    {
        $this->subreddit = $subreddit;
    }

    public function getWasComment()
    {
        return $this->was_comment;
    }

    public function setWasComment($wasComment)
    {
        $this->was_comment = $wasComment;
    }


}