<?php
namespace Flex\Code\Html\Tag\Event;

/**
 * Class ClipboardEventAwareTrait
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
trait ClipboardEventAwareTrait
{
    /**
     * @var array
     */
    protected $clipboardEvents = [];

    /**
     * Fires when the user copies the content of an element
     *
     * @param string $script
     * @return $this
     */
    public function oncopy($script)
    {
        $this->clipboardEvents['oncopy'] = $script;
    }

    /**
     * Fires when the user cuts the content of an element
     *
     * @param string $script
     * @return $this
     */
    public function oncut($script)
    {
        $this->clipboardEvents['oncut'] = $script;
    }

    /**
     * Fires when the user pastes some content in an element
     *
     * @param string $script
     * @return $this
     */
    public function onpaste($script)
    {
        $this->clipboardEvents['onpaste'] = $script;
    }
}
