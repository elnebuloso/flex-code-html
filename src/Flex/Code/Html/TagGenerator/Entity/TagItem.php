<?php
namespace Flex\Code\Html\TagGenerator\Entity;

use Flex\Code\Html\Tag\TagInterface;
use Flex\Data\AbstractRecursiveObject;

/**
 * Class TagItem
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class TagItem extends AbstractRecursiveObject
{
    /**
     * @var TagAttribute[]
     */
    private $tagAttributes;

    /**
     * @param array $record
     */
    public function __construct(array $record = [])
    {
        parent::__construct($record);

        foreach ($this->getAttributes() as $attribute) {
            $this->tagAttributes[$attribute['name']] = new TagAttribute($attribute);
        }

        ksort($this->tagAttributes);
    }

    /**
     * @return array
     */
    public function getRecordDefaults()
    {
        return array(
            'doctype'          => TagInterface::DOCTYPE_HTML5,
            'void'             => false,
            'attributesGlobal' => false,
            'eventsClipboard'  => false,
            'eventsForm'       => false,
            'eventsKeyboard'   => false,
            'eventsMedia'      => false,
            'eventsMisc'       => false,
            'eventsMouse'      => false,
            'eventsWindow'     => false,
            'attributes'       => []
        );
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->getRecordValue('name');
    }

    /**
     * @return string
     */
    public function getDoctype()
    {
        return $this->getRecordValue('doctype', TagInterface::DOCTYPE_HTML5);
    }

    /**
     * @return string|null
     */
    public function getShortDescription()
    {
        return $this->getRecordValue('shortDescription');
    }

    /**
     * @return string|null
     */
    public function getLongDescription()
    {
        return $this->getRecordValue('longDescription');
    }

    /**
     * @return string|null
     */
    public function getLink()
    {
        return $this->getRecordValue('link');
    }

    /**
     * @return bool
     */
    public function isVoid()
    {
        return $this->getRecordValue('void', false) === true;
    }

    /**
     * @return bool
     */
    public function hasAttributesGlobal()
    {
        return $this->getRecordValue('attributesGlobal', false) === true;
    }

    /**
     * @return bool
     */
    public function hasEventsClipboard()
    {
        return $this->getRecordValue('eventsClipboard', false) === true;
    }

    /**
     * @return bool
     */
    public function hasEventsForm()
    {
        return $this->getRecordValue('eventsForm', false) === true;
    }

    /**
     * @return bool
     */
    public function hasEventsKeyboard()
    {
        return $this->getRecordValue('eventsKeyboard', false) === true;
    }

    /**
     * @return bool
     */
    public function hasEventsMedia()
    {
        return $this->getRecordValue('eventsMedia', false) === true;
    }

    /**
     * @return bool
     */
    public function hasEventsMisc()
    {
        return $this->getRecordValue('eventsMisc', false) === true;
    }

    /**
     * @return bool
     */
    public function hasEventsMouse()
    {
        return $this->getRecordValue('eventsMouse', false) === true;
    }

    /**
     * @return bool
     */
    public function hasEventsWindow()
    {
        return $this->getRecordValue('eventsWindow', false) === true;
    }

    /**
     * @return array|null
     */
    public function getAttributes()
    {
        return $this->getRecordValue('attributes', []);
    }

    /**
     * @return TagAttribute[]
     */
    public function getTagAttributes()
    {
        return $this->tagAttributes;
    }
}
