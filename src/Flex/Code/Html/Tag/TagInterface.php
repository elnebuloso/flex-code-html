<?php
namespace Flex\Code\Html\Tag;

/**
 * Class TagInterface
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
interface TagInterface
{
    const DOCTYPE_HTML4 = 'html4';
    const DOCTYPE_HTML5 = 'html5';
    const DOCTYPE_XHTML = 'xhtml';

    /**
     * @param string $doctype
     * @return $this
     */
    public function setDoctype($doctype);

    /**
     * @param string $name
     * @param string $value
     * @return $this
     */
    public function setAttribute($name, $value);

    /**
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes = array());

    /**
     * @param mixed $child
     * @return $this
     */
    public function addChild($child);

    /**
     * @return $this
     */
    public static function create();

    /**
     * @return string
     */
    public function render();

    /**
     * @return string
     */
    public function __toString();
}

