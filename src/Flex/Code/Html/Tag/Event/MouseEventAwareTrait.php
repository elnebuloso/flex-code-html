<?php
namespace Flex\Code\Html\Tag\Event;

/**
 * Class MouseEventAwareTrait
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
trait MouseEventAwareTrait
{
    /**
     * @var array
     */
    protected $mouseEvents = [];

    /**
     * Fires on a mouse click on the element
     *
     * @param string $script
     * @return $this
     */
    public function onclick($script)
    {
        $this->mouseEvents['onclick'] = $script;
    }

    /**
     * Fires on a mouse double-click on the element
     *
     * @param string $script
     * @return $this
     */
    public function ondblclick($script)
    {
        $this->mouseEvents['ondblclick'] = $script;
    }

    /**
     * Script to be run when an element is dragged
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ondrag($script)
    {
        $this->mouseEvents['ondrag'] = $script;
    }

    /**
     * Script to be run at the end of a drag operation
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ondragend($script)
    {
        $this->mouseEvents['ondragend'] = $script;
    }

    /**
     * Script to be run when an element has been dragged to a valid drop target
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ondragenter($script)
    {
        $this->mouseEvents['ondragenter'] = $script;
    }

    /**
     * Script to be run when an element leaves a valid drop target
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ondragleave($script)
    {
        $this->mouseEvents['ondragleave'] = $script;
    }

    /**
     * Script to be run when an element is being dragged over a valid drop target
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ondragover($script)
    {
        $this->mouseEvents['ondragover'] = $script;
    }

    /**
     * Script to be run at the start of a drag operation
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ondragstart($script)
    {
        $this->mouseEvents['ondragstart'] = $script;
    }

    /**
     * Script to be run when dragged element is being dropped
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ondrop($script)
    {
        $this->mouseEvents['ondrop'] = $script;
    }

    /**
     * Fires when a mouse button is pressed down on an element
     *
     * @param string $script
     * @return $this
     */
    public function onmousedown($script)
    {
        $this->mouseEvents['onmousedown'] = $script;
    }

    /**
     * Fires when the mouse pointer is moving while it is over an element
     *
     * @param string $script
     * @return $this
     */
    public function onmousemove($script)
    {
        $this->mouseEvents['onmousemove'] = $script;
    }

    /**
     * Fires when the mouse pointer moves out of an element
     *
     * @param string $script
     * @return $this
     */
    public function onmouseout($script)
    {
        $this->mouseEvents['onmouseout'] = $script;
    }

    /**
     * Fires when the mouse pointer moves over an element
     *
     * @param string $script
     * @return $this
     */
    public function onmouseover($script)
    {
        $this->mouseEvents['onmouseover'] = $script;
    }

    /**
     * Fires when a mouse button is released over an element
     *
     * @param string $script
     * @return $this
     */
    public function onmouseup($script)
    {
        $this->mouseEvents['onmouseup'] = $script;
    }

    /**
     * Script to be run when an element's scrollbar is being scrolled
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onscroll($script)
    {
        $this->mouseEvents['onscroll'] = $script;
    }

    /**
     * Fires when the mouse wheel rolls up or down over an element
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onwheel($script)
    {
        $this->mouseEvents['onwheel'] = $script;
    }
}
