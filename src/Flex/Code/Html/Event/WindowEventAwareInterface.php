<?php
namespace Flex\Code\Html\Event;

/**
 * Interface WindowEventAwareInterface
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
interface WindowEventAwareInterface
{
    /**
     * Script to be run after the document is printed
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onafterprint($script);

    /**
     * Script to be run before the document is printed
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onbeforeprint($script);

    /**
     * Script to be run when the document is about to be unloaded
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onbeforeunload($script);

    /**
     * Script to be run when an error occur
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onerror($script);

    /**
     * Script to be run when there has been changes to the anchor part of the a URL
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onhashchange($script);

    /**
     * Fires after the page is finished loading
     *
     * @param string $script
     * @return $this
     */
    public function onload($script);

    /**
     * Script to be run when the message is triggered
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onmessage($script);

    /**
     * Script to be run when the browser starts to work offline
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onoffline($script);

    /**
     * Script to be run when the browser starts to work online
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ononline($script);

    /**
     * Script to be run when a user navigates away from a page
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onpagehide($script);

    /**
     * Script to be run when a user navigates to a page
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onpageshow($script);

    /**
     * Script to be run when the window's history changes
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onpopstate($script);

    /**
     * Fires when the browser window is resized
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onresize($script);

    /**
     * Script to be run when a Web Storage area is updated
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onstorage($script);

    /**
     * Fires once a page has unloaded (or the browser window has been closed)
     *
     * @param string $script
     * @return $this
     */
    public function onunload($script);
}
