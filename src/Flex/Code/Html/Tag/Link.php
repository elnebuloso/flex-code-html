<?php
namespace Flex\Code\Html\Tag;

use Flex\Code\Html\AbstractTag;
use Flex\Code\Html\TagInterface;

/**
 * Class Link
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/tag_link.asp
 */
class Link extends AbstractTag
{

    /**
     * @var string
     */
    protected $name = TagInterface::TAG_LINK;

    /**
     * @var bool
     */
    protected $isVoid = true;

    /**
     * @var array
     */
    protected $allowedAttributes = array(
        'charset' => true,
        'crossorigin' => true,
        'href' => true,
        'hreflang' => true,
        'media' => true,
        'rel' => true,
        'rev' => true,
        'sizes' => true,
        'target' => true,
        'type' => true
    );

    /**
     * @var array
     */
    protected $allowedFlags = array();

    /**
     * Specifies the character encoding of the linked document
     * Not supported in HTML5.
     *
     * @param string $v
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
     * @param string $v
     * @return $this
     */
    public function setCrossOrigin($v)
    {
        $this->attributes['crossorigin'] = $v;
        return $this;
    }

    /**
     * Specifies the location of the linked document
     *
     * @param string $v
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
     * @param string $v
     * @return $this
     */
    public function setHrefLang($v)
    {
        $this->attributes['hreflang'] = $v;
        return $this;
    }

    /**
     * Specifies on what device the linked document will be displayed
     *
     * @param string $v
     * @return $this
     */
    public function setMedia($v)
    {
        $this->attributes['media'] = $v;
        return $this;
    }

    /**
     * Required. Specifies the relationship between the current document and the linked document
     *
     * @param string $v
     * @return $this
     */
    public function setRel($v)
    {
        $this->attributes['rel'] = $v;
        return $this;
    }

    /**
     * Specifies the relationship between the linked document and the current document
     * Not supported in HTML5.
     *
     * @param string $v
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
     * @param string $v
     * @return $this
     */
    public function setSizes($v)
    {
        $this->attributes['sizes'] = $v;
        return $this;
    }

    /**
     * Specifies where the linked document is to be loaded
     * Not supported in HTML5.
     *
     * @param string $v
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
     * @param string $v
     * @return $this
     */
    public function setType($v)
    {
        $this->attributes['type'] = $v;
        return $this;
    }
}