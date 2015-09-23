<?php

namespace Flex\Code\Html\Tag;

use Flex\Code\Html\Tag\Model\AbstractTag;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareTrait;

/**
 * The <link> tag defines a link between a document and an external resource.
 *
 * The <link> tag is used to link to external style sheets.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_link.asp
 */
class Link extends AbstractTag implements GlobalAttributeAwareInterface
{

    use GlobalAttributeAwareTrait;

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
    protected $attributes = array(
        
    );

    /**
     * @var array
     */
    protected $flags = array(
        
    );

    /**
     * Not supported in HTML5. Specifies the character encoding of the linked document.
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
     * Specifies how the element handles cross-origin requests
     *
     * @var string
     * @return $this
     */
    public function setCrossorigin($v)
    {
        $this->attributes['crossorigin'] = $v;
        return $this;
    }

    /**
     * Specifies the location of the linked document
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
     * Specifies the language of the text in the linked document
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
     * Specifies on what device the linked document will be displayed
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
     * Required. Specifies the relationship between the current document and the linked
     * document
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
     * Specifies the size of the linked resource. Only for rel="icon"
     *
     * @var string
     * @return $this
     */
    public function setSizes($v)
    {
        $this->attributes['sizes'] = $v;
        return $this;
    }

    /**
     * Not supported in HTML5. Specifies where the linked document is to be loaded
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
