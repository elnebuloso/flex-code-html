<?php
namespace Flex\Code\Html\Tag;

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
     * @var string
     */
    protected $doctype = TagInterface::DOCTYPE_HTML5;

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
    protected $children = array();

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
     * @param string $name
     * @param string $value
     * @return $this
     */
    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes = array())
    {
        $this->attributes = $attributes;
        return $this;
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
     * @return $this
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string
     */
    public function render()
    {
        $diff = array_combine(array_values($this->flags), array_values($this->flags));
        $attributes = $this->attributes;
        $attributes = array_diff_key($attributes, $diff);
        $attributes = $this->renderAttributes($attributes);

        $flags = $this->attributes;
        $flags = array_intersect_key($flags, $diff);
        $flags = $this->renderFlags($flags);

        $tag = array();
        $tag[] = '<' . $this->name;

        if (!empty($attributes)) {
            $tag[] = ' ' . $attributes;
        }

        if (!empty($flags)) {
            $tag[] = ' ' . $flags;
        }

        if ($this->isVoid && $this->doctype == TagInterface::DOCTYPE_XHTML) {
            $tag[] = ' />';
        } elseif ($this->isVoid) {
            $tag[] = '>';
        } elseif (!$this->isVoid && $this->hasChildren()) {
            $tag[] = '>';

            foreach ($this->children as $child) {
                if ($child instanceof TagInterface) {
                    $tag[] = $child->render();
                } elseif (!is_object($child)) {
                    $child = trim($child);

                    if (!empty($child)) {
                        $tag[] = $child;
                    }
                }
            }

            $tag[] = '</' . $this->name . '>';
        } else {
            $tag[] = '></' . $this->name . '>';
        }

        return implode(null, $tag);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @return bool
     */
    protected function hasChildren()
    {
        return count($this->children) > 0;
    }

    /**
     * @param array $attributes
     * @return string
     */
    protected function renderAttributes(array $attributes)
    {
        $attributes = array_filter($attributes);
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
        $flags = array_combine(array_keys($flags), array_keys($flags));
        ksort($flags);

        if ($this->doctype == TagInterface::DOCTYPE_XHTML) {
            array_walk($flags, create_function('&$i,$k', '$i="$k=\"$i\"";'));
        } else {
            $flags = array_keys($flags);
        }

        return implode(' ', $flags);
    }
}
