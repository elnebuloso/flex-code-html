<?php
namespace Flex\Code\Html\Event;

/**
 * Interface ClipboardEventAwareInterface
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
interface ClipboardEventAwareInterface
{
    /**
     * Fires when the user copies the content of an element
     *
     * @param string $script
     * @return $this
     */
    public function oncopy($script);

    /**
     * Fires when the user cuts the content of an element
     *
     * @param string $script
     * @return $this
     */
    public function oncut($script);

    /**
     * Fires when the user pastes some content in an element
     *
     * @param string $script
     * @return $this
     */
    public function onpaste($script);
}
