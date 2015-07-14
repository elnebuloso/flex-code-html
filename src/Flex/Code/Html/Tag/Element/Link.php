<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Tag\AbstractTag;
use Flex\Code\Html\Tag\TagInterface;

/**
 * The <link> tag defines a link between a document and an external resource.
 * The <link> tag is used to link to external style sheets.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_link.asp
 */
class Link extends AbstractTag
{

    /**
     * @var string
     */
    protected $name = 'link';

    /**
     * @var string
     */
    protected $doctype = 'html5';

    /**
     * @var bool
     */
    protected $isVoid = true;

    /**
     * @var array
     */
    protected $attributes = array();

    /**
     * @var array
     */
    protected $flags = array();

    /**
     * @var array
     */
    protected $flagsHtml5 = array(
        'crossorigin',
        'sizes',
    );

    /**
     * @var array
     */
    protected $flagsHtml5NoSupport = array(
        'charset',
        'rev',
        'target',
    );

    /**
     * @var string
     * @return $this
     */
    public function setCharset($v)
    {
        if ($this->doctype == TagInterface::DOCTYPE_HTML5 && in_array('charset', $this->flagsHtml5NoSupport)) {
            return $this;
        }

        $this->attributes['charset'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setCrossorigin($v)
    {
        if ($this->doctype != TagInterface::DOCTYPE_HTML5 && in_array('crossorigin', $this->flagsHtml5)) {
            return $this;
        }

        $this->attributes['crossorigin'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setHref($v)
    {
        $this->attributes['href'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setHreflang($v)
    {
        $this->attributes['hreflang'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setMedia($v)
    {
        $this->attributes['media'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setRel($v)
    {
        $this->attributes['rel'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setRev($v)
    {
        if ($this->doctype == TagInterface::DOCTYPE_HTML5 && in_array('rev', $this->flagsHtml5NoSupport)) {
            return $this;
        }

        $this->attributes['rev'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setSizes($v)
    {
        if ($this->doctype != TagInterface::DOCTYPE_HTML5 && in_array('sizes', $this->flagsHtml5)) {
            return $this;
        }

        $this->attributes['sizes'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setTarget($v)
    {
        if ($this->doctype == TagInterface::DOCTYPE_HTML5 && in_array('target', $this->flagsHtml5NoSupport)) {
            return $this;
        }

        $this->attributes['target'] = $v;
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
}

