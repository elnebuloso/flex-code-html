<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Tag\AbstractTag;
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

/**
 * The <link> tag defines a link between a document and an external resource.
 *
 * The <link> tag is used to link to external style sheets.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_link.asp
 */
class Link extends AbstractTag implements GlobalAttributeAwareInterface, ClipboardEventAwareInterface, FormEventAwareInterface, KeyboardEventAwareInterface, MediaEventAwareInterface, MiscEventAwareInterface, MouseEventAwareInterface, WindowEventAwareInterface
{

    use GlobalAttributeAwareTrait, ClipboardEventAwareTrait, FormEventAwareTrait, KeyboardEventAwareTrait, MediaEventAwareTrait, MiscEventAwareTrait, MouseEventAwareTrait, WindowEventAwareTrait;

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
    public function setCrossorigin($v)
    {
        $this->attributes['crossorigin'] = $v;
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
    public function setSizes($v)
    {
        $this->attributes['sizes'] = $v;
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

