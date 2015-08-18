<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Tag\AbstractTag;
use Flex\Code\Html\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Attribute\GlobalAttributeAwareTrait;
use Flex\Code\Html\Event\ClipboardEventAwareTrait;

/**
 * The <form> tag is used to create an HTML form for user input.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_form.asp
 */
class Form extends AbstractTag implements GlobalAttributeAwareInterface
{

    use GlobalAttributeAwareTrait, ClipboardEventAwareTrait;

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

