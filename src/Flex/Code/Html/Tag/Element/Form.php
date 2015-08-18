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
 * The <form> tag is used to create an HTML form for user input.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_form.asp
 */
class Form extends AbstractTag implements GlobalAttributeAwareInterface, ClipboardEventAwareInterface, FormEventAwareInterface, KeyboardEventAwareInterface, MediaEventAwareInterface, MiscEventAwareInterface, MouseEventAwareInterface, WindowEventAwareInterface
{

    use GlobalAttributeAwareTrait, ClipboardEventAwareTrait, FormEventAwareTrait, KeyboardEventAwareTrait, MediaEventAwareTrait, MiscEventAwareTrait, MouseEventAwareTrait, WindowEventAwareTrait;

    /**
     * @var string
     */
    protected $name = 'form';

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
    public function setAccept($v)
    {
        $this->attributes['accept'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setAcceptCharset($v)
    {
        $this->attributes['accept-charset'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setAction($v)
    {
        $this->attributes['action'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setAutocomplete($v)
    {
        $this->attributes['autocomplete'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setEnctype($v)
    {
        $this->attributes['enctype'] = $v;
        return $this;
    }

    /**
     * @var string
     * @return $this
     */
    public function setMethod($v)
    {
        $this->attributes['method'] = $v;
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
    public function setNovalidate($v)
    {
        $this->attributes['novalidate'] = $v;
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


}

