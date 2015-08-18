<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Tag\AbstractTag;
use Flex\Code\Html\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Attribute\GlobalAttributeAwareTrait;
use Flex\Code\Html\Event\ClipboardEventAwareTrait;

/**
 * The <a> tag defines a hyperlink, which is used to link from one page to another.
 *
 * The most important attribute of the <a> element is the href attribute, which
 * indicates the link's destination. By default, links will appear as follows in
 * all browsers: An unvisited link is underlined and blue, A visited link is
 * underlined and purple, An active link is underlined and red
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_a.asp
 */
class A extends AbstractTag implements GlobalAttributeAwareInterface
{

    use GlobalAttributeAwareTrait, ClipboardEventAwareTrait;

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
    protected $attributes = array(
        
    );

    /**
     * @var array
     */
    protected $flags = array(
        
    );

    /**
     * @var string
     * @return $this
     */
    public function setCharset($v)
    {
        $this->attributes['charset'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setCoords($v)
    {
        $this->attributes['coords'] = $v;
        return $this;
    }


}

