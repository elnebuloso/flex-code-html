<?php
namespace Flex\Code\Html\Tag\Attribute;

/**
 * Class GlobalAttributeAwareTrait
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_standardattributes.asp
 */
trait GlobalAttributeAwareTrait
{
    /**
     * @var array
     */
    protected $globalAttributes = [];

    /**
     * @var array
     */
    protected $globalFlags = [
        'hidden'
    ];

    /**
     * Specifies a shortcut key to activate/focus an element
     *
     * @param string $value
     * @return $this
     */
    public function setAccesskey($value)
    {
        $this->globalAttributes['accesskey'] = $value;
    }

    /**
     * Specifies one or more classnames for an element (refers to a class in a style sheet)
     *
     * @param string $value
     * @return $this
     */
    public function setClass($value)
    {
        $this->globalAttributes['class'] = $value;
    }

    /**
     * Specifies whether the content of an element is editable or not
     * html5only
     *
     * @param string $value
     * @return $this
     */
    public function setContenteditable($value)
    {
        $this->globalAttributes['contenteditable'] = $value;
    }

    /**
     * Specifies a context menu for an element. The context menu appears when a user right-clicks on the element
     * html5only
     *
     * @param string $value
     * @return $this
     */
    public function setContextmenu($value)
    {
        $this->globalAttributes['contextmenu'] = $value;
    }

    /**
     * Used to store custom data private to the page or application
     * html5only
     *
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function setData($key, $value)
    {
        $this->globalAttributes['data-' . $key] = $value;
    }

    /**
     * Specifies the text direction for the content in an element
     *
     * @param string $value
     * @return $this
     */
    public function setDir($value)
    {
        $this->globalAttributes['dir'] = $value;
    }

    /**
     * Specifies whether an element is draggable or not
     * html5only
     *
     * @param string $value
     * @return $this
     */
    public function setDraggable($value)
    {
        $this->globalAttributes['draggable'] = $value;
    }

    /**
     * Specifies whether the dragged data is copied, moved, or linked, when dropped
     * html5only
     *
     * @param string $value
     * @return $this
     */
    public function setDropzone($value)
    {
        $this->globalAttributes['dropzone'] = $value;
    }

    /**
     * Specifies that an element is not yet, or is no longer, relevant
     * html5only
     *
     * @param string $value
     * @return $this
     */
    public function setHidden($value)
    {
        $this->globalAttributes['hidden'] = $value;
    }

    /**
     * Specifies a unique id for an element
     *
     * @param string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->globalAttributes['id'] = $value;
    }

    /**
     * Specifies the language of the element's content
     *
     * @param string $value
     * @return $this
     */
    public function setLang($value)
    {
        $this->globalAttributes['lang'] = $value;
    }

    /**
     * Specifies whether the element is to have its spelling and grammar checked or not
     * html5only
     *
     * @param string $value
     * @return $this
     */
    public function setSpellcheck($value)
    {
        $this->globalAttributes['spellcheck'] = $value;
    }

    /**
     * Specifies an inline CSS style for an element
     *
     * @param string $value
     * @return $this
     */
    public function setStyle($value)
    {
        $this->globalAttributes['style'] = $value;
    }

    /**
     * Specifies the tabbing order of an element
     *
     * @param string $value
     * @return $this
     */
    public function setTabindex($value)
    {
        $this->globalAttributes['tabindex'] = $value;
    }

    /**
     * Specifies extra information about an element
     *
     * @param string $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->globalAttributes['title'] = $value;
    }

    /**
     * Specifies whether the content of an element should be translated or not
     * html5only
     *
     * @param string $value
     * @return $this
     */
    public function setTranslate($value)
    {
        $this->globalAttributes['translate'] = $value;
    }
}
