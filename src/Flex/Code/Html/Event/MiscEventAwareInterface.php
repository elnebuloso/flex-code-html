<?php
namespace Flex\Code\Html\Event;

/**
 * Interface MiscEventAwareInterface
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
interface MiscEventAwareInterface
{
    /**
     * Fires when an error occurs while loading an external file
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onerror($script);

    /**
     * Fires when a <menu> element is shown as a context menu
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onshow($script);

    /**
     * Fires when the user opens or closes the <details> element
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ontoggle($script);
}
