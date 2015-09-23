<?php

namespace Flex\Code\Html\Tag;

use Flex\Code\Html\Tag\Model\AbstractTag;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareTrait;

/**
 * The <div> tag defines a division or a section in an HTML document.
 *
 * The <div> tag is used to group block-elements to format them with CSS.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_div.asp
 */
class Div extends AbstractTag implements GlobalAttributeAwareInterface
{

    use GlobalAttributeAwareTrait;

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
    protected $attributes = array(
        
    );

    /**
     * @var array
     */
    protected $flags = array(
        
    );

    /**
     * Not supported in HTML5. Specifies the alignment of the content inside a <div>
     * element
     *
     * @var string
     * @return $this
     */
    public function setAlign($v)
    {
        $this->attributes['align'] = $v;
        return $this;
    }


}

