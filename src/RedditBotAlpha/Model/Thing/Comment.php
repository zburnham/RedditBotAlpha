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
    public function getAuthorFlairCssClass()
    {
        return $this->author_flair_css_class;
    }

    /**
     * @param string $author_flair_css_class
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setAuthorFlairCssClass($authorFlairCssClass)
    {
        $this->author_flair_css_class = $authorFlairCssClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorFlairText()
    {
        return $this->author_flair_text;
    }

    /**
     * @param string $authorFlairText
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setAuthorFlairText($authorFlairText)
    {
        $this->author_flair_text = $authorFlairText;
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
    public function getBodyHtml()
    {
        return $this->body_html;
    }

    /**
     * @param string $bodyHtml
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->body_html = $bodyHtml;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkId()
    {
        return $this->link_id;
    }

    /**
     * @param string $linkId
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setLinkId($linkId)
    {
        $this->link_id = $linkId;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parentId
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;
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
    public function getSubredditId()
    {
        return $this->subreddit_id;
    }
    
    /**
     * @param string $subredditId
     * @return \RedditBotAlpha\Model\Thing\Comment
     */
    public function setSubredditId($subredditId)
    {
        $this->subreddit_id = $subredditId;
        return $this;
    }
}