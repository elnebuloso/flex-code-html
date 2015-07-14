<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Tag\AbstractTag;
use Flex\Code\Html\Tag\TagInterface;

/**
 * The <script> tag is used to define a client-side script, such as a JavaScript.
 * The <script> element either contains scripting statements, or it points to an
 * external script file through the src attribute. Common uses for JavaScript are
 * image manipulation, form validation, and dynamic changes of content.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_script.asp
 */
class Script extends AbstractTag
{

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
    protected $attributes = array();

    /**
     * @var array
     */
    protected $flags = array(
        'async',
        'defer',
    );

    /**
     * @var array
     */
    protected $flagsHtml5 = array(
        'async',
    );

    /**
     * @var array
     */
    protected $flagsHtml5NoSupport = array(
        'xml:space',
    );

    /**
     * @var string
     * @return $this
     */
    public function isAsync($v = true)
    {
        if ($this->doctype != TagInterface::DOCTYPE_HTML5 && in_array('async', $this->flagsHtml5)) {
            return $this;
        }

        $this->attributes['async'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setCharset($v = 'UTF-8')
    {
        $this->attributes['charset'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function isDefer($v = true)
    {
        $this->attributes['defer'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setSrc($v)
    {
        $this->attributes['src'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setType($v)
    {
        $this->attributes['type'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setXmlSpace($v)
    {
        if ($this->doctype == TagInterface::DOCTYPE_HTML5 && in_array('xml:space', $this->flagsHtml5NoSupport)) {
            return $this;
        }

        $this->attributes['xml:space'] = $v;
        return $this;
    }
}

