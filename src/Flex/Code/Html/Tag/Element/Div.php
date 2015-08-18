<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Attribute\GlobalAttributeAwareTrait;
use Flex\Code\Html\Event\ClipboardEventAwareInterface;
use Flex\Code\Html\Event\ClipboardEventAwareTrait;
use Flex\Code\Html\Event\FormEventAwareInterface;
use Flex\Code\Html\Event\FormEventAwareTrait;
use Flex\Code\Html\Event\KeyboardEventAwareInterface;
use Flex\Code\Html\Event\KeyboardEventAwareTrait;
use Flex\Code\Html\Event\MediaEventAwareInterface;
use Flex\Code\Html\Event\MediaEventAwareTrait;
use Flex\Code\Html\Event\MiscEventAwareInterface;
use Flex\Code\Html\Event\MiscEventAwareTrait;
use Flex\Code\Html\Event\MouseEventAwareInterface;
use Flex\Code\Html\Event\MouseEventAwareTrait;
use Flex\Code\Html\Event\WindowEventAwareInterface;
use Flex\Code\Html\Event\WindowEventAwareTrait;
use Flex\Code\Html\Tag\AbstractTag;

/**
 * The <div> tag defines a division or a section in an HTML document.
 *
 * The <div> tag is used to group block-elements to format them with CSS.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_div.asp
 */
class Div extends AbstractTag implements GlobalAttributeAwareInterface, ClipboardEventAwareInterface, FormEventAwareInterface, KeyboardEventAwareInterface, MediaEventAwareInterface, MiscEventAwareInterface, MouseEventAwareInterface, WindowEventAwareInterface
{

    use GlobalAttributeAwareTrait, ClipboardEventAwareTrait, FormEventAwareTrait, KeyboardEventAwareTrait, MediaEventAwareTrait, MiscEventAwareTrait, MouseEventAwareTrait, WindowEventAwareTrait;

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
     * @var string
     * @return $this
     */
    public function setAlign($v)
    {
        $this->attributes['align'] = $v;
        return $this;
    }
}
