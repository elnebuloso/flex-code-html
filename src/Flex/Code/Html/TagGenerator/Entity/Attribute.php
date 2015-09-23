<?php
namespace Flex\Code\Html\TagGenerator\Entity;

/**
 * Class Attribute
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Attribute
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $tagId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $defaultValue;

    /**
     * @var bool
     */
    private $isFlag;

    /**
     * @var bool
     */
    private $isHtml5;

    /**
     * @var bool
     */
    private $isHtml5Support;

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
     * @return int
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * @param int $tagId
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return boolean
     */
    public function isFlag()
    {
        return $this->isFlag;
    }

    /**
     * @param boolean $isFlag
     */
    public function setIsFlag($isFlag)
    {
        $this->isFlag = $isFlag;
    }

    /**
     * @return boolean
     */
    public function isHtml5()
    {
        return $this->isHtml5;
    }

    /**
     * @param boolean $isHtml5
     */
    public function setIsHtml5($isHtml5)
    {
        $this->isHtml5 = $isHtml5;
    }

    /**
     * @return boolean
     */
    public function isHtml5Support()
    {
        return $this->isHtml5Support;
    }

    /**
     * @param boolean $isHtml5Support
     */
    public function setIsHtml5Support($isHtml5Support)
    {
        $this->isHtml5Support = $isHtml5Support;
    }
}
