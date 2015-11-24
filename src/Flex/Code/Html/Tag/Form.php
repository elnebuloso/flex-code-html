<?php

namespace Flex\Code\Html\Tag;

use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareInterface;
use Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareTrait;
use Flex\Code\Html\Tag\Model\AbstractTag;

/**
 * The <form> tag is used to create an HTML form for user input.
 *
 * @author elnebuloso/flex-code-html-generator
 * @link http://www.w3schools.com/tags/tag_form.asp
 */
class Form extends AbstractTag implements GlobalAttributeAwareInterface
{
    use GlobalAttributeAwareTrait;

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
    protected $attributes = [

    ];

    /**
     * @var array
     */
    protected $flags = [

    ];

    /**
     * Not supported in HTML5. Specifies a comma-separated list of file types  that the
     * server accepts (that can be submitted through the file upload)
     *
     * @var string
     * @return $this
     */
    public function setAccept($v)
    {
        $this->attributes['accept'] = $v;

        return $this;
    }

    /**
     * Specifies the character encodings that are to be used for the form submission
     *
     * @var string
     * @return $this
     */
    public function setAcceptCharset($v)
    {
        $this->attributes['accept-charset'] = $v;

        return $this;
    }

    /**
     * Specifies where to send the form-data when a form is submitted
     *
     * @var string
     * @return $this
     */
    public function setAction($v)
    {
        $this->attributes['action'] = $v;

        return $this;
    }

    /**
     * Specifies whether a form should have autocomplete on or off
     *
     * @var string
     * @return $this
     */
    public function setAutocomplete($v)
    {
        $this->attributes['autocomplete'] = $v;

        return $this;
    }

    /**
     * Specifies how the form-data should be encoded when submitting it to the server
     * (only for method="post")
     *
     * @var string
     * @return $this
     */
    public function setEnctype($v)
    {
        $this->attributes['enctype'] = $v;

        return $this;
    }

    /**
     * Specifies the HTTP method to use when sending form-data
     *
     * @var string
     * @return $this
     */
    public function setMethod($v)
    {
        $this->attributes['method'] = $v;

        return $this;
    }

    /**
     * Specifies the name of a form
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
     * Specifies that the form should not be validated when submitted
     *
     * @var string
     * @return $this
     */
    public function setNovalidate($v)
    {
        $this->attributes['novalidate'] = $v;

        return $this;
    }

    /**
     * Specifies where to display the response that is received after submitting the
     * form
     *
     * @var string
     * @return $this
     */
    public function setTarget($v)
    {
        $this->attributes['target'] = $v;

        return $this;
    }
}
