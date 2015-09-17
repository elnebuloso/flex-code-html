<?php
namespace Flex\Code\Html\TagGenerator\Entity;

/**
 * Class Tag
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Tag
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @var string
     */
    private $longDescription;

    /**
     * @var bool
     */
    private $isVoid;

    /**
     * @var bool
     */
    private $isGlobalAttributeAware;

    /**
     * @var bool
     */
    private $isClipboardEventAware;

    /**
     * @var bool
     */
    private $isFormEventAware;

    /**
     * @var bool
     */
    private $isKeyboardEventAware;

    /**
     * @var bool
     */
    private $isMediaEventAware;

    /**
     * @var bool
     */
    private $isMiscEventAware;

    /**
     * @var bool
     */
    private $isMouseEventAware;

    /**
     * @var bool
     */
    private $isWindowEventAware;

    /**
     * @var AttributeCollection
     */
    private $attributes;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * @param string $longDescription
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;
    }

    /**
     * @return boolean
     */
    public function isVoid()
    {
        return $this->isVoid;
    }

    /**
     * @param boolean $isVoid
     */
    public function setIsVoid($isVoid)
    {
        $this->isVoid = $isVoid;
    }

    /**
     * @return boolean
     */
    public function isGlobalAttributeAware()
    {
        return $this->isGlobalAttributeAware;
    }

    /**
     * @param boolean $isGlobalAttributeAware
     */
    public function setIsGlobalAttributeAware($isGlobalAttributeAware)
    {
        $this->isGlobalAttributeAware = $isGlobalAttributeAware;
    }

    /**
     * @return boolean
     */
    public function isClipboardEventAware()
    {
        return $this->isClipboardEventAware;
    }

    /**
     * @param boolean $isClipboardEventAware
     */
    public function setIsClipboardEventAware($isClipboardEventAware)
    {
        $this->isClipboardEventAware = $isClipboardEventAware;
    }

    /**
     * @return boolean
     */
    public function isFormEventAware()
    {
        return $this->isFormEventAware;
    }

    /**
     * @param boolean $isFormEventAware
     */
    public function setIsFormEventAware($isFormEventAware)
    {
        $this->isFormEventAware = $isFormEventAware;
    }

    /**
     * @return boolean
     */
    public function isKeyboardEventAware()
    {
        return $this->isKeyboardEventAware;
    }

    /**
     * @param boolean $isKeyboardEventAware
     */
    public function setIsKeyboardEventAware($isKeyboardEventAware)
    {
        $this->isKeyboardEventAware = $isKeyboardEventAware;
    }

    /**
     * @return boolean
     */
    public function isMediaEventAware()
    {
        return $this->isMediaEventAware;
    }

    /**
     * @param boolean $isMediaEventAware
     */
    public function setIsMediaEventAware($isMediaEventAware)
    {
        $this->isMediaEventAware = $isMediaEventAware;
    }

    /**
     * @return boolean
     */
    public function isMiscEventAware()
    {
        return $this->isMiscEventAware;
    }

    /**
     * @param boolean $isMiscEventAware
     */
    public function setIsMiscEventAware($isMiscEventAware)
    {
        $this->isMiscEventAware = $isMiscEventAware;
    }

    /**
     * @return boolean
     */
    public function isMouseEventAware()
    {
        return $this->isMouseEventAware;
    }

    /**
     * @param boolean $isMouseEventAware
     */
    public function setIsMouseEventAware($isMouseEventAware)
    {
        $this->isMouseEventAware = $isMouseEventAware;
    }

    /**
     * @return boolean
     */
    public function isWindowEventAware()
    {
        return $this->isWindowEventAware;
    }

    /**
     * @param boolean $isWindowEventAware
     */
    public function setIsWindowEventAware($isWindowEventAware)
    {
        $this->isWindowEventAware = $isWindowEventAware;
    }

    /**
     * @return AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param AttributeCollection $attributes
     */
    public function setAttributes(AttributeCollection $attributes)
    {
        $this->attributes = $attributes;
    }
}
