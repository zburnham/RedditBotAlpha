<?php
/**
 * Link.php
 * Model to handle Link class.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model\Thing;

use RedditBotAlpha\Model\Thing;
use RedditBotAlpha\Model\Thing\Interfaces\Created;
use RedditBotAlpha\Model\Thing\Interfaces\Votable;

class Link extends Thing
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
     * probably always returns false
     *
     * @var bool
     */
    protected $click;
    
    /**
     * the domain of this link. Self posts will be self.reddit.com while other examples 
     * include en.wikipedia.org and s3.amazon.com
     *
     * @var string 
     */
    protected $domain;
    
    /**
     * true if the post is hidden by the logged in user. false if not logged in 
     * or not hidden.
     *
     * @var bool
     */
    protected $hidden;
    
    /**
     * true if this link is a selfpost
     *
     * @var bool
     */
    protected $is_self;
    
    /**
     * unknown. I need someone else to document this as I haven't done much research 
     * into this
     *
     * @var mixed
     */
    protected $media;
    
    /**
     * unknown. I need someone else to document this as I haven't done much research 
     * into this
     *
     * @var mixed
     */
    protected $media_embed;
    
    /**
     * the number of comments that belong to this link
     *
     * @var int
     */
    protected $num_comments;
    
    /**
     * true if the post is tagged as NSFW. False if otherwise
     *
     * @var bool
     */
    protected $over_18;
    
    /**
     * relative url of the permanent link for this link
     *
     * @var string
     */
    protected $permalink;
    
    /**
     * true if this post is saved by the logged in user
     *
     * @var bool
     */
    protected $saved;
    
    /**
     * the net-score of the link. note: A submission's score is simply the number 
     * of upvotes minus the number of downvotes. If five users like the submission 
     * and three users don't it will have a score of 2. Please note that the vote 
     * numbers are not "real" numbers, they have been "fuzzed" to prevent spam bots 
     * etc. So taking the above example, if five users upvoted the submission, and 
     * three users downvote it, the upvote/downvote numbers may say 23 upvotes and 
     * 21 downvotes, or 12 upvotes, and 10 downvotes. The points score is correct, 
     * but the vote totals are "fuzzed".
     *
     * @var int
     */
    protected $score;
    
    /**
     * the raw text. this is the unformatted text which includes the raw markup 
     * characters such as ** for bold.
     *
     * @var string
     */
    protected $selftext;
    
    /**
     * the formatted escaped html text. this is the html formatted version of the 
     * marked up text. Items that are boldened by ** or *** will now have <em> or 
     * *** tags on them. Additionally, bullets and numbered lists will now be in 
     * html list format. NOTE: The html string will be escaped. You must unescape 
     * to get the raw html.
     *
     * @var string
     */
    protected $selftext_html;
    
    /**
     * (no description given)
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
     * full url to the thumbnail for this link
     *
     * @var string
     */
    protected $thumbnail;
    
    /**
     * (no description given)
     *
     * @var string
     */
    protected $title;
    
    /**
     * the link of this post. the permalink if this is a self-post
     *
     * @var string
     */
    protected $url;
    
    /**
     * Indicates if link has been edited. Will be the edit timestamp if the link 
     * has been edited and return false otherwise. https://github.com/reddit/reddit/issues/581
     * 
     * @var decimal|bool
     */
    protected $edited;
    
    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return \RedditBotAlpha\Model\Thing\Link
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
     * 
     * @param string $authorFlairCssClass
     * @return \RedditBotAlpha\Model\Thing\Link
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
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setAuthorFlairText($authorFlairText)
    {
        $this->author_flair_text = $authorFlairText;
        return $this;
    }

    /**
     * @return bool
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * @param bool $click
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setClick(bool $click)
    {
        $this->click = $click;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @param bool $hidden
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setHidden(bool $hidden)
    {
        $this->hidden = $hidden;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSelf()
    {
        return $this->is_self;
    }

    /**
     * @param bool $isSelf
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setIsSelf(bool $isSelf)
    {
        $this->is_self = $isSelf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param mixed $media
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMediaEmbed()
    {
        return $this->media_embed;
    }

    /**
     * @param mixed $mediaEmbed
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setMediaEmbed($mediaEmbed)
    {
        $this->media_embed = $mediaEmbed;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumComments()
    {
        return $this->num_comments;
    }

    /**
     * @param int $numComments
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setNumComments($numComments)
    {
        $this->num_comments = $numComments;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOver18()
    {
        return $this->over_18;
    }

    /**
     * @param bool $over18
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setOver_18(bool $over18)
    {
        $this->over_18 = $over18;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermalink()
    {
        return $this->permalink;
    }

    /**
     * @param string $permalink
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSaved()
    {
        return $this->saved;
    }

    /**
     * @param bool $saved
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setSaved(bool $saved)
    {
        $this->saved = $saved;
        return $this;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelftext()
    {
        return $this->selftext;
    }

    /**
     * 
     * @param string $selftext
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setSelftext($selftext)
    {
        $this->selftext = $selftext;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelftextHtml()
    {
        return $this->selftext_html;
    }

    /**
     * @param string $selftextHtml
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setSelftextHtml($selftextHtml)
    {
        $this->selftext_html = $selftextHtml;
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
     * @return \RedditBotAlpha\Model\Thing\Link
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
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setSubredditId($subredditId)
    {
        $this->subreddit_id = $subredditId;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
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
     * @return \RedditBotAlpha\Model\Thing\Link
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
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getEdited()
    {
        return $this->edited;
    }

    /**
     * @param decimal $edited
     * @return \RedditBotAlpha\Model\Thing\Link
     */
    public function setEdited(decimal $edited)
    {
        $this->edited = $edited;
        return $this;
    }
}