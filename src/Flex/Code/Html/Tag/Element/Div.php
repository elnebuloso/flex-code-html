<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Tag\AbstractTag;
use Flex\Code\Html\Tag\TagInterface;

/**
 * The <div> tag defines a division or a section in an HTML document.
 * The <div> tag is used to group block-elements to format them with CSS.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_div.asp
 */
class Div extends AbstractTag
{

    /**
     * @var string
     */
    protected $name = 'div';

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
        'align',
    );

    /**
     * @var string
     * @return $this
     */
    public function setAlign($v)
    {
        if ($this->doctype == TagInterface::DOCTYPE_HTML5 && in_array('align', $this->flagsHtml5NoSupport)) {
            return $this;
        }

        $this->attributes['align'] = $v;
        return $this;
    }
}

