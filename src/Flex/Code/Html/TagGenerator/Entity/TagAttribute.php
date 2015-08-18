<?php
namespace Flex\Code\Html\TagGenerator\Entity;

use Flex\Data\AbstractRecursiveObject;

/**
 * Class TagAttribute
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class TagAttribute extends AbstractRecursiveObject
{
    /**
     * @return array
     */
    public function getRecordDefaults()
    {
        return array(
            'flag' => false
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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getRecordValue('description');
    }

    /**
     * @return bool
     */
    public function isFlag()
    {
        return $this->getRecordValue('flag', false) === true;
    }
}
