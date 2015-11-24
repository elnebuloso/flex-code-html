<?php

namespace Flex\Code\Html\Tag;

use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareTrait;
use Flex\Code\Html\Tag\Model\AbstractTag;

/**
 * The <meta> tag provides metadata about the HTML document. Metadata will not be
 * displayed on the page, but will be machine parsable.
 *
 * Meta elements are typically used to specify page description, keywords, author
 * of the document, last modified, and other metadata. The metadata can be used by
 * browsers (how to display content or reload page), search engines (keywords), or
 * other web services.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_meta.asp
 */
class Meta extends AbstractTag implements GlobalAttributeAwareInterface
{
    use GlobalAttributeAwareTrait;

    /**
     * @var string
     */
    protected $name = 'meta';

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
    protected $attributes = [

    ];

    /**
     * @var array
     */
    protected $flags = [

    ];

    /**
     * Specifies the character encoding for the HTML document
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
     * Gives the value associated with the http-equiv or name attribute
     *
     * @var string
     * @return $this
     */
    public function setContent($v)
    {
        $this->attributes['content'] = $v;

        return $this;
    }

    /**
     * Provides an HTTP header for the information/value of the content attribute
     *
     * @var string
     * @return $this
     */
    public function setHttpEquiv($v)
    {
        $this->attributes['http-equiv'] = $v;

        return $this;
    }

    /**
     * Specifies a name for the metadata
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
     * NOT VALID in HTML5, only with correct doctype
     *
     * <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
     * "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
     *
     * @var string
     * @return $this
     */
    public function setProperty($v)
    {
        $this->attributes['property'] = $v;

        return $this;
    }

    /**
     * Not supported in HTML5. Specifies a scheme to be used to interpret the value of
     * the content attribute
     *
     * @var string
     * @return $this
     */
    public function setScheme($v)
    {
        $this->attributes['scheme'] = $v;

        return $this;
    }
}
