<?php
namespace Flex\Code\Html\TagGenerator;

use Flex\Code\Html\Tag\TagInterface;
use Flex\Code\Html\TagGenerator\Entity\TagAttribute;
use Flex\Code\Html\TagGenerator\Entity\TagItem;
use Flex\Converter\StringToCamelCase;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlock\Tag\GenericTag;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\FileGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;
use Zend\Code\Generator\PropertyGenerator;

/**
 * Class TagGenerator
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Generator
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var StringToCamelCase
     */
    protected $stringToCamelCaseConverter;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->stringToCamelCaseConverter = new StringToCamelCase();
    }

    /**
     * @return void
     */
    public function generate()
    {
        foreach ($this->data['tags'] as $tag) {
            $this->generateTag(new TagItem($tag));
        }
    }

    /**
     * @param TagItem $tagItem
     */
    protected function generateTag(TagItem $tagItem)
    {
        if ($tagItem->getName() == 'template') {
            return;
        }

        $class = $this->createClass($tagItem);

        $this->addPropertyName($class, $tagItem);
        $this->addPropertyDoctype($class);
        $this->addPropertyIsVoid($class, $tagItem);
        $this->addPropertyAttributes($class);
        $this->addPropertyFlags($class, $tagItem);
        $this->addAttributes($class, $tagItem);
        $this->writeClass($class);
    }

    /**
     * @param TagItem $tagItem
     * @return ClassGenerator
     */
    protected function createClass(TagItem $tagItem)
    {
        $className = ucfirst($this->stringToCamelCaseConverter->convert($tagItem->getName()));
        $class = new ClassGenerator();
        $class->setNamespaceName('Flex\Code\Html\Tag\Element');
        $class->setName($className);

        $class->addUse('Flex\Code\Html\Tag\AbstractTag');
        $class->setExtendedClass('AbstractTag');

        $implementedInterfaces = [];

        if ($tagItem->hasAttributesGlobal()) {
            $implementedInterfaces[] = 'GlobalAttributeAwareInterface';

            $class->addUse('Flex\Code\Html\Attribute\GlobalAttributeAwareInterface');
            $class->addUse('Flex\Code\Html\Attribute\GlobalAttributeAwareTrait');
            $class->addTrait('GlobalAttributeAwareTrait');
        }

        if ($tagItem->hasEventsClipboard()) {
            $implementedInterfaces[] = 'ClipboardEventAwareInterface';

            $class->addUse('Flex\Code\Html\Event\ClipboardEventAwareInterface');
            $class->addUse('Flex\Code\Html\Event\ClipboardEventAwareTrait');
            $class->addTrait('ClipboardEventAwareTrait');
        }

        if ($tagItem->hasEventsForm()) {
            $implementedInterfaces[] = 'FormEventAwareInterface';

            $class->addUse('Flex\Code\Html\Event\FormEventAwareInterface');
            $class->addUse('Flex\Code\Html\Event\FormEventAwareTrait');
            $class->addTrait('FormEventAwareTrait');
        }

        if ($tagItem->hasEventsKeyboard()) {
            $implementedInterfaces[] = 'KeyboardEventAwareInterface';

            $class->addUse('Flex\Code\Html\Event\KeyboardEventAwareInterface');
            $class->addUse('Flex\Code\Html\Event\KeyboardEventAwareTrait');
            $class->addTrait('KeyboardEventAwareTrait');
        }

        if ($tagItem->hasEventsMedia()) {
            $implementedInterfaces[] = 'MediaEventAwareInterface';

            $class->addUse('Flex\Code\Html\Event\MediaEventAwareInterface');
            $class->addUse('Flex\Code\Html\Event\MediaEventAwareTrait');
            $class->addTrait('MediaEventAwareTrait');
        }

        if ($tagItem->hasEventsMisc()) {
            $implementedInterfaces[] = 'MiscEventAwareInterface';

            $class->addUse('Flex\Code\Html\Event\MiscEventAwareInterface');
            $class->addUse('Flex\Code\Html\Event\MiscEventAwareTrait');
            $class->addTrait('MiscEventAwareTrait');
        }

        if ($tagItem->hasEventsMouse()) {
            $implementedInterfaces[] = 'MouseEventAwareInterface';

            $class->addUse('Flex\Code\Html\Event\MouseEventAwareInterface');
            $class->addUse('Flex\Code\Html\Event\MouseEventAwareTrait');
            $class->addTrait('MouseEventAwareTrait');
        }

        if ($tagItem->hasEventsWindow()) {
            $implementedInterfaces[] = 'WindowEventAwareInterface';

            $class->addUse('Flex\Code\Html\Event\WindowEventAwareInterface');
            $class->addUse('Flex\Code\Html\Event\WindowEventAwareTrait');
            $class->addTrait('WindowEventAwareTrait');
        }

        $class->setImplementedInterfaces($implementedInterfaces);

        $docBlock = new DocBlockGenerator();
        $docBlock->setTag(new GenericTag('author', 'elnebuloso/flex-code-html-generator'));
        $docBlock->setTag(new GenericTag('link', $tagItem->getLink()));

        if (!is_null($tagItem->getShortDescription())) {
            $docBlock->setShortDescription($tagItem->getShortDescription());
        }

        if (!is_null($tagItem->getLongDescription())) {
            $docBlock->setLongDescription($tagItem->getLongDescription());
        }

        $class->setDocBlock($docBlock);

        return $class;
    }

    /**
     * @param ClassGenerator $class
     * @param TagItem $tagItem
     */
    protected function addPropertyName(ClassGenerator $class, TagItem $tagItem)
    {
        $property = new PropertyGenerator('name', $tagItem->getName(), PropertyGenerator::FLAG_PROTECTED);

        $docBlock = new DocBlockGenerator();
        $docBlock->setTag(new GenericTag('var', 'string'));

        $property->setDocBlock($docBlock);
        $class->addPropertyFromGenerator($property);
    }

    /**
     * @param ClassGenerator $class
     */
    public function addPropertyDoctype(ClassGenerator $class)
    {
        $property = new PropertyGenerator('doctype', TagInterface::DOCTYPE_HTML5, PropertyGenerator::FLAG_PROTECTED);

        $docBlock = new DocBlockGenerator();
        $docBlock->setTag(new GenericTag('var', 'string'));

        $property->setDocBlock($docBlock);
        $class->addPropertyFromGenerator($property);
    }

    /**
     * @param ClassGenerator $class
     * @param TagItem $tagItem
     */
    public function addPropertyIsVoid(ClassGenerator $class, TagItem $tagItem)
    {
        $property = new PropertyGenerator('isVoid', $tagItem->isVoid(), PropertyGenerator::FLAG_PROTECTED);

        $docBlock = new DocBlockGenerator();
        $docBlock->setTag(new GenericTag('var', 'bool'));

        $property->setDocBlock($docBlock);
        $class->addPropertyFromGenerator($property);
    }

    /**
     * @param ClassGenerator $class
     */
    protected function addPropertyAttributes(ClassGenerator $class)
    {
        $property = new PropertyGenerator('attributes', [], PropertyGenerator::FLAG_PROTECTED);

        $docBlock = new DocBlockGenerator();
        $docBlock->setTag(new GenericTag('var', 'array'));

        $property->setDocBlock($docBlock);
        $class->addPropertyFromGenerator($property);
    }

    /**
     * @param ClassGenerator $class
     * @param TagItem $tagItem
     */
    protected function addPropertyFlags(ClassGenerator $class, TagItem $tagItem)
    {
        $flags = [];

        foreach ($tagItem->getTagAttributes() as $tagAttribute) {
            if ($tagAttribute->isFlag()) {
                $flags[] = $tagAttribute->getName();
            }
        }

        sort($flags);

        $property = new PropertyGenerator('flags', [], PropertyGenerator::FLAG_PROTECTED);
        $property->setDefaultValue($flags);

        $docBlock = new DocBlockGenerator();
        $docBlock->setTag(new GenericTag('var', 'array'));

        $property->setDocBlock($docBlock);
        $class->addPropertyFromGenerator($property);
    }

    /**
     * @param ClassGenerator $class
     * @param TagItem $tagItem
     */
    protected function addAttributes(ClassGenerator $class, TagItem $tagItem)
    {
        foreach ($tagItem->getTagAttributes() as $tagAttribute) {
            $this->addAttribute($class, $tagAttribute);
        }
    }

    /**
     * @param ClassGenerator $class
     * @param TagAttribute $tagAttribute
     */
    protected function addAttribute(ClassGenerator $class, TagAttribute $tagAttribute)
    {
        $methodName = str_replace(':', '-', $tagAttribute->getName());
        $methodName = ucfirst($this->stringToCamelCaseConverter->convert($methodName, '-'));

        $method = new MethodGenerator();

        if ($tagAttribute->isFlag()) {
            $method->setName('is' . $methodName);
            $method->setParameter(new ParameterGenerator('v', 'bool', true));
        } else {
            $method->setName('set' . $methodName);
            $method->setParameter(new ParameterGenerator('v', 'string'));
        }

        $body = [];
        $body[] = '$this->attributes[\'' . $tagAttribute->getName() . '\'] = $v;';
        $body[] = 'return $this;';

        $method->setBody(implode(PHP_EOL, $body));

        $docBlock = new DocBlockGenerator();
        $docBlock->setTag(new GenericTag('var', 'string'));
        $docBlock->setTag(new GenericTag('return', '$this'));
        $method->setDocBlock($docBlock);

        $class->addMethodFromGenerator($method);
    }

    /**
     * @param ClassGenerator $class
     */
    protected function writeClass(ClassGenerator $class)
    {
        $generator = new FileGenerator();
        $generator->setClass($class);
        $generator->setFilename('src/Flex/Code/Html/Tag/Element/' . $class->getName() . '.php');
        $generator->write();
    }
}
