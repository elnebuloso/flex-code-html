<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Tag\AbstractTag;
use Flex\Code\Html\Tag\TagInterface;

/**
 * The <a> tag defines a hyperlink, which is used to link from one page to another.
 * The most important attribute of the <a> element is the href attribute, which
 * indicates the link's destination. By default, links will appear as follows in
 * all browsers: An unvisited link is underlined and blue, A visited link is
 * underlined and purple, An active link is underlined and red
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_a.asp
 */
class A extends AbstractTag
{

    /**
     * @var string
     */
    protected $name = 'a';

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
    protected $flags = array();

    /**
     * @var array
     */
    protected $flagsHtml5 = array();

    /**
     * @var array
     */
    protected $flagsHtml5NoSupport = array(
        'charset',
        'coords',
    );

    /**
     * @var string
     * @return $this
     */
    public function setCharset($v = 'UTF-8')
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
    public function setCoords($v)
    {
        if ($this->doctype == TagInterface::DOCTYPE_HTML5 && in_array('coords', $this->flagsHtml5NoSupport)) {
            return $this;
        }

        $this->attributes['coords'] = $v;
        return $this;
    }
}

