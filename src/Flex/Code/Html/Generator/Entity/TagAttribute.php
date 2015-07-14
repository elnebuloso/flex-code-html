<?php
namespace Flex\Code\Html\Generator\Entity;

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
            'flag' => false,
            'html5' => false,
            'html5Support' => true
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
     * @return string|null
     */
    public function getDefault()
    {
        return $this->getRecordValue('default');
    }

    /**
     * @return bool
     */
    public function isFlag()
    {
        return $this->getRecordValue('flag', false) === true;
    }

    /**
     * @return bool
     */
    public function isHtml5()
    {
        return $this->getRecordValue('html5', false) === true;
    }

    /**
     * @return bool
     */
    public function isHtml5Support()
    {
        return $this->getRecordValue('html5Support', true) === true;
    }
}