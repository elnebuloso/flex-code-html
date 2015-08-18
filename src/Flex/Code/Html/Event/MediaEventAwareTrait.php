<?php
namespace Flex\Code\Html\Event;

/**
 * Class MediaEventAwareTrait
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 * @link http://www.w3schools.com/tags/ref_eventattributes.asp
 */
trait MediaEventAwareTrait
{
    /**
     * @var array
     */
    protected $mediaEvents = [];

    /**
     * Script to be run on abort
     *
     * @param string $script
     * @return $this
     */
    public function onabort($script)
    {
        $this->mediaEvents['onabort'] = $script;
    }

    /**
     * Script to be run when a file is ready to start playing (when it has buffered enough to begin)
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oncanplay($script)
    {
        $this->mediaEvents['oncanplay'] = $script;
    }

    /**
     * Script to be run when a file can be played all the way to the end without pausing for buffering
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oncanplaythrough($script)
    {
        $this->mediaEvents['oncanplaythrough'] = $script;
    }

    /**
     * Script to be run when the cue changes in a <track> element
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function oncuechange($script)
    {
        $this->mediaEvents['oncuechange'] = $script;
    }

    /**
     * Script to be run when the length of the media changes
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ondurationchange($script)
    {
        $this->mediaEvents['ondurationchange'] = $script;
    }

    /**
     * Script to be run when something bad happens and the file is suddenly unavailable (like unexpectedly disconnects)
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onemptied($script)
    {
        $this->mediaEvents['onemptied'] = $script;
    }

    /**
     * Script to be run when the media has reach the end (a useful event for messages like "thanks for listening")
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onended($script)
    {
        $this->mediaEvents['onended'] = $script;
    }

    /**
     * Script to be run when an error occurs when the file is being loaded
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onerror($script)
    {
        $this->mediaEvents['onerror'] = $script;
    }

    /**
     * Script to be run when media data is loaded
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onloadeddata($script)
    {
        $this->mediaEvents['onloadeddata'] = $script;
    }

    /**
     * Script to be run when meta data (like dimensions and duration) are loaded
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onloadedmetadata($script)
    {
        $this->mediaEvents['onloadedmetadata'] = $script;
    }

    /**
     * Script to be run just as the file begins to load before anything is actually loaded
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onloadstart($script)
    {
        $this->mediaEvents['onloadstart'] = $script;
    }

    /**
     * Script to be run when the media is paused either by the user or programmatically
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onpause($script)
    {
        $this->mediaEvents['onpause'] = $script;
    }

    /**
     * Script to be run when the media is ready to start playing
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onplay($script)
    {
        $this->mediaEvents['onplay'] = $script;
    }

    /**
     * Script to be run when the media actually has started playing
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onplaying($script)
    {
        $this->mediaEvents['onplaying'] = $script;
    }

    /**
     * Script to be run when the browser is in the process of getting the media data
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onprogress($script)
    {
        $this->mediaEvents['onprogress'] = $script;
    }

    /**
     * Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode)
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onratechange($script)
    {
        $this->mediaEvents['onratechange'] = $script;
    }

    /**
     * Script to be run when the seeking attribute is set to false indicating that seeking has ended
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onseeked($script)
    {
        $this->mediaEvents['onseeked'] = $script;
    }

    /**
     * Script to be run when the seeking attribute is set to true indicating that seeking is active
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onseeking($script)
    {
        $this->mediaEvents['onseeking'] = $script;
    }

    /**
     * Script to be run when the browser is unable to fetch the media data for whatever reason
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onstalled($script)
    {
        $this->mediaEvents['onstalled'] = $script;
    }

    /**
     * Script to be run when fetching the media data is stopped before it is completely loaded for whatever reason
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onsuspend($script)
    {
        $this->mediaEvents['onsuspend'] = $script;
    }

    /**
     * Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media)
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function ontimeupdate($script)
    {
        $this->mediaEvents['ontimeupdate'] = $script;
    }

    /**
     * Script to be run each time the volume is changed which (includes setting the volume to "mute")
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onvolumechange($script)
    {
        $this->mediaEvents['onvolumechange'] = $script;
    }

    /**
     * Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data)
     * html5only
     *
     * @param string $script
     * @return $this
     */
    public function onwaiting($script)
    {
        $this->mediaEvents['onwaiting'] = $script;
    }
}
