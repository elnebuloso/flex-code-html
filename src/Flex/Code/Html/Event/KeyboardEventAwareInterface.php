<?php
namespace Flex\Code\Html\Event;

/**
 * Interface KeyboardEventAwareInterface
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
interface KeyboardEventAwareInterface
{
    /**
     * Fires when a user is pressing a key
     *
     * @param string $script
     * @return $this
     */
    public function onkeydown($script);

    /**
     * Fires when a user presses a key
     *
     * @param string $script
     * @return $this
     */
    public function onkeypress($script);

    /**
     * Fires when a user releases a key
     *
     * @param string $script
     * @return $this
     */
    public function onkeyup($script);
}
