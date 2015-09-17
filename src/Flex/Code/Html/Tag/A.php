<?php

namespace Flex\Code\Html\Tag;

use Flex\Code\Html\Tag\Model\AbstractTag;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareTrait;

/**
 * The <a> tag defines a hyperlink, which is used to link from one page to another.
 *
 * The most important attribute of the <a> element is the href attribute, which
 * indicates the link's destination. By default, links will appear as follows in
 * all browsers: An unvisited link is underlined and blue, A visited link is
 * underlined and purple, An active link is underlined and red.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_a.asp
 */
class A extends AbstractTag implements GlobalAttributeAwareInterface
{

    use GlobalAttributeAwareTrait;

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

    /**
     * @var string
     * @return $this
     */
    public function setDownload($v)
    {
        $this->attributes['download'] = $v;
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
    public function setName($v)
    {
        $this->attributes['name'] = $v;
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
        $this->attributes['rev'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setShape($v)
    {
        $this->attributes['shape'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setTarget($v)
    {
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

