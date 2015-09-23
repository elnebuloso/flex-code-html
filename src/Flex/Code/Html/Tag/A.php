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
    protected $attributes = array(
        
    );

    /**
     * @var array
     */
    protected $flags = array(
        
    );

    /**
     * Not supported in HTML5. Specifies the character-set of a linked document
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
     * Not supported in HTML5. Specifies the coordinates of a link
     *
     * @var string
     * @return $this
     */
    public function setCoords($v)
    {
        $this->attributes['coords'] = $v;
        return $this;
    }

    /**
     * Specifies that the target will be downloaded when a user clicks on the hyperlink
     *
     * @var string
     * @return $this
     */
    public function setDownload($v)
    {
        $this->attributes['download'] = $v;
        return $this;
    }

    /**
     * Specifies the URL of the page the link goes to
     *
     * @var string
     * @return $this
     */
    public function setHref($v)
    {
        $this->attributes['href'] = $v;
        return $this;
    }

    /**
     * Specifies the language of the linked document
     *
     * @var string
     * @return $this
     */
    public function setHreflang($v)
    {
        $this->attributes['hreflang'] = $v;
        return $this;
    }

    /**
     * Specifies what media/device the linked document is optimized for
     *
     * @var string
     * @return $this
     */
    public function setMedia($v)
    {
        $this->attributes['media'] = $v;
        return $this;
    }

    /**
     * Not supported in HTML5. Use the global id attribute instead. Specifies the name
     * of an anchor
     *
     * @var string
     * @return $this
     */
    public function setName($v)
    {
        $this->attributes['name'] = $v;
        return $this;
    }

    /**
     * Specifies the relationship between the current document and the linked document
     *
     * @var string
     * @return $this
     */
    public function setRel($v)
    {
        $this->attributes['rel'] = $v;
        return $this;
    }

    /**
     * Not supported in HTML5. Specifies the relationship between the linked document
     * and the current document
     *
     * @var string
     * @return $this
     */
    public function setRev($v)
    {
        $this->attributes['rev'] = $v;
        return $this;
    }

    /**
     * Not supported in HTML5. Specifies the shape of a link
     *
     * @var string
     * @return $this
     */
    public function setShape($v)
    {
        $this->attributes['shape'] = $v;
        return $this;
    }

    /**
     * Specifies where to open the linked document
     *
     * @var string
     * @return $this
     */
    public function setTarget($v)
    {
        $this->attributes['target'] = $v;
        return $this;
    }

    /**
     * Specifies the media type of the linked document
     *
     * @var string
     * @return $this
     */
    public function setType($v)
    {
        $this->attributes['type'] = $v;
        return $this;
    }
}
