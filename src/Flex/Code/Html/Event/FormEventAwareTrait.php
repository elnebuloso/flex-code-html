<?php
namespace Flex\Code\Html\Event;

/**
 * Class FormEventAwareTrait
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
trait FormEventAwareTrait
{
    /**
     * @var array
     */
    protected $formEvents = [];

    /**
     * Fires the moment that the element loses focus
     *
     * @param string $script
     * @return $this
     */
    public function onblur($script)
    {
        $this->formEvents['onblur'] = $script;
    }

    /**
     * Fires the moment when the value of the element is changed
     *
     * @param string $script
     * @return $this
     */
    public function onchange($script)
    {
        $this->formEvents['onchange'] = $script;
    }

    /**
     * Script to be run when a context menu is triggered
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oncontextmenu($script)
    {
        $this->formEvents['oncontextmenu'] = $script;
    }

    /**
     * Fires the moment when the element gets focus
     *
     * @param string $script
     * @return $this
     */
    public function onfocus($script)
    {
        $this->formEvents['onfocus'] = $script;
    }

    /**
     * Script to be run when an element gets user input
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oninput($script)
    {
        $this->formEvents['oninput'] = $script;
    }

    /**
     * Script to be run when an element is invalid
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oninvalid($script)
    {
        $this->formEvents[''] = $script;
    }

    /**
     * Fires when the Reset button in a form is clicked
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onreset($script)
    {
        $this->formEvents['onreset'] = $script;
    }

    /**
     * Fires when the user writes something in a search field (for <input="search">)
     *
     * @param string $script
     * @return $this
     */
    public function onsearch($script)
    {
        $this->formEvents['onsearch'] = $script;
    }

    /**
     * Fires after some text has been selected in an element
     *
     * @param string $script
     * @return $this
     */
    public function onselect($script)
    {
        $this->formEvents['onselect'] = $script;
    }

    /**
     * Fires when a form is submitted
     *
     * @param string $script
     * @return $this
     */
    public function onsubmit($script)
    {
        $this->formEvents['onsubmit'] = $script;
    }
}
