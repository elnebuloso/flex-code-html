<?php

namespace Flex\Code\Html\Tag;

use Flex\Code\Html\Tag\Model\AbstractTag;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareTrait;

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
    public function setContent($v)
    {
        $this->attributes['content'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setHttpEquiv($v)
    {
        $this->attributes['http-equiv'] = $v;
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
    public function setScheme($v)
    {
        $this->attributes['scheme'] = $v;
        return $this;
    }

}

