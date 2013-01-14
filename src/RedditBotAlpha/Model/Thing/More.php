<?php
/**
 * More.php
 * Model for the "More" Reddit data type.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace RedditBotAlpha\Model\Thing;

use RedditBotAlpha\Model\Thing;

class More extends Thing
{
    /**
     * A list of String ids that are the additional things that can be downloaded 
     * but are not because there are too many to list.
     *
     * @var array
     */
    protected $children;
    
    /**
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param array $children
     * @return \RedditBotAlpha\Model\Thing\More
     */
    public function setChildren(array $children)
    {
        $this->children = $children;
        return $this;
    }
}