<?php
namespace Flex\Code\Html\Event;

/**
 * Interface FormEventAwareInterface
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
interface FormEventAwareInterface
{
    /**
     * Fires the moment that the element loses focus
     *
     * @param string $script
     * @return $this
     */
    public function onblur($script);

    /**
     * Fires the moment when the value of the element is changed
     *
     * @param string $script
     * @return $this
     */
    public function onchange($script);

    /**
     * Script to be run when a context menu is triggered
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oncontextmenu($script);

    /**
     * Fires the moment when the element gets focus
     *
     * @param string $script
     * @return $this
     */
    public function onfocus($script);

    /**
     * Script to be run when an element gets user input
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oninput($script);

    /**
     * Script to be run when an element is invalid
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oninvalid($script);

    /**
     * Fires when the Reset button in a form is clicked
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onreset($script);

    /**
     * Fires when the user writes something in a search field (for <input="search">)
     *
     * @param string $script
     * @return $this
     */
    public function onsearch($script);

    /**
     * Fires after some text has been selected in an element
     *
     * @param string $script
     * @return $this
     */
    public function onselect($script);

    /**
     * Fires when a form is submitted
     *
     * @param string $script
     * @return $this
     */
    public function onsubmit($script);
}
