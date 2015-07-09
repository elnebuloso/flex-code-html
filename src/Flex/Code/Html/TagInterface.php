<?php
namespace Flex\Code\Html;

/**
 * Class TagInterface
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
interface TagInterface
{

    const DOM_XML = 'xml';
    const DOM_HTML = 'html';
    const DOM_XHTML = 'xhtml';

    const DOCTYPE_HTML4 = 'html4';
    const DOCTYPE_HTML5 = 'html5';
    const DOCTYPE_XHTML = 'xhtml';

    const TAG_SCRIPT = 'script';
    const TAG_LINK = 'link';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return bool
     */
    public function isVoid();

    /**
     * @return array
     */
    public function getAllowedAttributes();

    /**
     * @return array
     */
    public function getAllowedFlags();

    /**
     * @param string $doctype
     * @return string
     */
    public function setDoctype($doctype);

    /**
     * @return string
     */
    public function getDoctype();

    /**
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes);

    /**
     * @return array
     */
    public function getAttributes();

    /**
     * @param array $attributes
     * @return $this
     */
    public function setCustomAttributes(array $attributes);

    /**
     * @return array
     */
    public function getCustomAttributes();

    /**
     * @param mixed $child
     * @return $this
     */
    public function addChild($child);

    /**
     * @return array
     */
    public function getChildren();

    /**
     * @return bool
     */
    public function hasChildren();

    /**
     * @return string
     */
    public function __toString();

    /**
     * @return string
     */
    public function render();

    /**
     * @return $this
     */
    public static function create();
}
