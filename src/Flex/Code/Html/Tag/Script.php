<?php
namespace Flex\Code\Html\Tag;

use Flex\Code\Html\AbstractTag;
use Flex\Code\Html\TagInterface;

/**
 * Class Script
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/tag_script.asp
 */
class Script extends AbstractTag
{

    /**
     * @var string
     */
    protected $name = TagInterface::TAG_SCRIPT;

    /**
     * @var array
     */
    protected $allowedAttributes = array(
        'charset' => true,
        'src' => true,
        'type' => true
    );

    /**
     * @var array
     */
    protected $allowedFlags = array(
        'async' => true,
        'defer' => true
    );

    /**
     * Specifies the character encoding used in an external script file
     *
     * @param string $v
     * @return $this
     */
    public function setCharset($v = 'UTF-8')
    {
        $this->attributes['charset'] = $v;
        return $this;
    }

    /**
     * Specifies the URL of an external script file
     *
     * @param string $v
     * @return $this
     */
    public function setSrc($v)
    {
        $this->attributes['src'] = $v;
        return $this;
    }

    /**
     * Specifies the media type of the script
     *
     * @param string $v
     * @return $this
     */
    public function setType($v)
    {
        $this->attributes['type'] = $v;
        return $this;
    }

    /**
     * Specifies that the script is executed asynchronously (only for external scripts)
     * New in HTML5
     *
     * @param bool $v
     * @return $this
     */
    public function isAsync($v)
    {
        $this->attributes['async'] = $v;
        return $this;
    }

    /**
     * Specifies that the script is executed when the page has finished parsing (only for external scripts)
     *
     * @param bool $v
     * @return $this
     */
    public function isDefer($v = true)
    {
        $this->attributes['defer'] = $v;
        return $this;
    }
}