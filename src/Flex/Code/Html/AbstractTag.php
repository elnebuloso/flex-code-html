<?php
namespace Flex\Code\Html;

/**
 * Class AbstractTag
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class AbstractTag implements TagInterface
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var bool
     */
    protected $isVoid = false;

    /**
     * @var string
     */
    protected $doctype = TagInterface::DOCTYPE_HTML5;

    /**
     * @var array
     */
    protected $allowedAttributes = array();

    /**
     * @var array
     */
    protected $allowedFlags = array();

    /**
     * @var array
     */
    protected $attributes = array();

    /**
     * @var array
     */
    protected $customAttributes = array();

    /**
     * @var array
     */
    protected $children = array();

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isVoid()
    {
        return $this->isVoid;
    }

    /**
     * @return array
     */
    public function getAllowedAttributes()
    {
        return $this->allowedAttributes;
    }

    /**
     * @return array
     */
    public function getAllowedFlags()
    {
        return $this->allowedFlags;
    }

    /**
     * @param string $doctype
     * @return $this
     */
    public function setDoctype($doctype)
    {
        $this->doctype = $doctype;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoctype()
    {
        return $this->doctype;
    }

    /**
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $customAttributes
     * @return $this
     */
    public function setCustomAttributes(array $customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param mixed $child
     * @return $this
     */
    public function addChild($child)
    {
        $this->children[] = $child;
        return $this;
    }

    /**
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return count($this->getChildren()) > 0;
    }

    /**
     * @return $this
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @return string
     */
    public function render()
    {
        $tag = array();
        $tag[] = '<' . $this->getName();

        $attributes = array_merge($this->getAttributes(), $this->getCustomAttributes());
        $attributes = $this->renderAttributes($attributes);

        $flags = array_merge($this->getAttributes(), $this->getCustomAttributes());
        $flags = $this->renderFlags($flags);

        if (!empty($attributes)) {
            $tag[] = ' ' . $attributes;
        }

        if (!empty($flags)) {
            $tag[] = ' ' . $flags;
        }

        if ($this->isVoid() && $this->getDoctype() == TagInterface::DOCTYPE_XHTML) {
            $tag[] = ' />';
        } elseif ($this->isVoid()) {
            $tag[] = '>';
        } elseif (!$this->isVoid() && $this->hasChildren()) {
            $tag[] = '>';

            foreach ($this->getChildren() as $child) {
                if ($child instanceof TagInterface) {
                    $tag[] = $child->render();
                } elseif (!is_object($child)) {
                    $child = trim($child);

                    if (!empty($child)) {
                        $tag[] = $child;
                    }
                }
            }

            $tag[] = '</' . $this->getName() . '>';
        } else {
            $tag[] = '></' . $this->getName() . '>';
        }

        return implode(null, $tag);
    }

    /**
     * @param array $attributes
     * @return string
     */
    protected function renderAttributes(array $attributes)
    {
        $attributes = array_filter($attributes);
        $attributes = array_intersect_key($attributes, $this->getAllowedAttributes());
        ksort($attributes);

        array_walk($attributes, create_function('&$i,$k', '$i="$k=\"$i\"";'));

        return implode(' ', $attributes);
    }

    /**
     * @param array $flags
     * @return string
     */
    protected function renderFlags(array $flags)
    {
        $flags = array_filter($flags);
        $flags = array_intersect_key($flags, $this->getAllowedFlags());
        ksort($flags);

        // In XHTML, attribute minimization is forbidden
        $flags = array_combine(array_keys($flags), array_keys($flags));

        if ($this->getDoctype() == TagInterface::DOCTYPE_XHTML) {
            array_walk($flags, create_function('&$i,$k', '$i="$k=\"$i\"";'));
        } else {
            $flags = array_keys($flags);
        }

        return implode(' ', $flags);
    }
}
