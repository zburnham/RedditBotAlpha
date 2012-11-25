<?php
/**
 * Comment.php
 * Model to handle Comment data.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model\Thing;

use RedditBotAlpha\Model\Thing;
use RedditBotAlpha\Module\Thing\Interfaces\Votable;
use RedditBotAlpha\Module\Thing\Interfaces\Created;

class Comment extends Thing implements Votable, Created
{
    /**
     * the account name of the poster
     *
     * @var string 
     */
    protected $author;
    
    /**
     * the css class of the author's flair. subreddit specific
     *
     * @var string
     */
    protected $author_flair_css_class;
    
    /**
     * the text of the author's flair. subreddit specific
     *
     * @var string
     */
    protected $author_flair_text;
    
    /**
     * the raw text. this is the unformatted text which includes the raw markup 
     * characters such as ** for bold.
     *
     * @var string
     */
    protected $body;
    
    /**
     * the formatted html text. this is the html formatted version of the marked 
     * up text. Items that are boldened by ** or *** will now have <em> or *** tags 
     * on them. Additionally, bullets and numbered lists will now be in html list 
     * format. NOTE: The html string will be escaped. You must unescape to get 
     * the raw html.
     *
     * @var string
     */
    protected $body_html;
    
    /**
     * (no description given)
     *
     * @var string
     */
    protected $link_id;
    
    /**
     * (no description given)
     *
     * @var string
     */
    protected $parent_id;
    
    /**
     * subreddit of thing excluding the /r/ prefix. "pics"
     *
     * @var string
     */
    protected $subreddit;
    
    /**
     * (no description given)
     *
     * @var string
     */
    protected $subreddit_id;

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor_flair_css_class()
    {
        return $this->author_flair_css_class;
    }

    /**
     * @param string $author_flair_css_class
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setAuthor_flair_css_class($author_flair_css_class)
    {
        $this->author_flair_css_class = $author_flair_css_class;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor_flair_text()
    {
        return $this->author_flair_text;
    }

    /**
     * @param string $author_flair_text
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setAuthor_flair_text($author_flair_text)
    {
        $this->author_flair_text = $author_flair_text;
        return $this;
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
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
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
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setBody_html($body_html)
    {
        $this->body_html = $body_html;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink_id()
    {
        return $this->link_id;
    }

    /**
     * @param string $link_id
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setLink_id($link_id)
    {
        $this->link_id = $link_id;
        return $this;
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
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;
        return $this;
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
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setSubreddit($subreddit)
    {
        $this->subreddit = $subreddit;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubreddit_id()
    {
        return $this->subreddit_id;
    }
    
    /**
     * @param string $subreddit_id
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setSubreddit_id($subreddit_id)
    {
        $this->subreddit_id = $subreddit_id;
        return $this;
    }


}