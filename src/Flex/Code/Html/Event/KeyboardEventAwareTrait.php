<?php
namespace Flex\Code\Html\Event;

/**
 * Class KeyboardEventAwareTrait
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
trait KeyboardEventAwareTrait
{
    /**
     * @var array
     */
    protected $keyboardEvents = [];

    /**
     * Fires when a user is pressing a key
     *
     * @param string $script
     * @return $this
     */
    public function onkeydown($script)
    {
        $this->keyboardEvents['onkeydown'] = $script;
    }

    /**
     * Fires when a user presses a key
     *
     * @param string $script
     * @return $this
     */
    public function onkeypress($script)
    {
        $this->keyboardEvents['onkeypress'] = $script;
    }

    /**
     * Fires when a user releases a key
     *
     * @param string $script
     * @return $this
     */
    public function onkeyup($script)
    {
        $this->keyboardEvents['onkeyup'] = $script;
    }
}
