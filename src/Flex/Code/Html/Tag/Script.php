<?php

namespace Flex\Code\Html\Tag;

use Flex\Code\Html\Tag\Model\AbstractTag;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareTrait;

/**
 * The <script> tag is used to define a client-side script, such as a JavaScript.
 *
 * The <script> element either contains scripting statements, or it points to an
 * external script file through the src attribute. Common uses for JavaScript are
 * image manipulation, form validation, and dynamic changes of content.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_script.asp
 */
class Script extends AbstractTag implements GlobalAttributeAwareInterface
{

    use GlobalAttributeAwareTrait;

    /**
     * @var string
     */
    protected $name = 'script';

    /**
     * @var string
     */
    protected $doctype = 'html5';

    /**
     * @var bool
     */
    protected $isVoid = false;

    /**
     * @var array
     */
    protected $attributes = array(
        
    );

    /**
     * @var array
     */
    protected $flags = array(
        'async',
        'defer',
    );

    /**
     * Specifies that the script is executed asynchronously (only for external scripts)
     *
     * @var string
     * @return $this
     */
    public function isAsync($v = true)
    {
        $this->attributes['async'] = $v;
        return $this;
    }

    /**
     * Specifies the character encoding used in an external script file
     *
     * @var string
     * @return $this
     */
    public function setCharset($v)
    {
        $this->attributes['charset'] = $v;
        return $this;
    }

    /**
     * Specifies that the script is executed when the page has finished parsing (only
     * for external scripts)
     *
     * @var string
     * @return $this
     */
    public function isDefer($v = true)
    {
        $this->attributes['defer'] = $v;
        return $this;
    }

    /**
     * Specifies the URL of an external script file
     *
     * @var string
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
     * @var string
     * @return $this
     */
    public function setType($v)
    {
        $this->attributes['type'] = $v;
        return $this;
    }

    /**
     * Not supported in HTML5. Specifies whether whitespace in code should be preserved
     *
     * @var string
     * @return $this
     */
    public function setXmlSpace($v)
    {
        $this->attributes['xml:space'] = $v;
        return $this;
    }


}

