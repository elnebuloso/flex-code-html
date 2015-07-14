<?php

namespace Flex\Code\Html\Tag\Element;

use Flex\Code\Html\Tag\AbstractTag;
use Flex\Code\Html\Tag\TagInterface;

/**
 * The <form> tag is used to create an HTML form for user input.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_form.asp
 */
class Form extends AbstractTag
{

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
    protected $attributes = array();

    /**
     * @var array
     */
    protected $flags = array();

    /**
     * @var array
     */
    protected $flagsHtml5 = array(
        'autocomplete',
        'novalidate',
    );

    /**
     * @var array
     */
    protected $flagsHtml5NoSupport = array(
        'accept',
    );

    /**
     * @var string
     * @return $this
     */
    public function setAccept($v)
    {
        if ($this->doctype == TagInterface::DOCTYPE_HTML5 && in_array('accept', $this->flagsHtml5NoSupport)) {
            return $this;
        }

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
        if ($this->doctype != TagInterface::DOCTYPE_HTML5 && in_array('autocomplete', $this->flagsHtml5)) {
            return $this;
        }

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
        if ($this->doctype != TagInterface::DOCTYPE_HTML5 && in_array('novalidate', $this->flagsHtml5)) {
            return $this;
        }

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

