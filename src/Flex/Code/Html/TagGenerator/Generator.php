<?php
namespace Flex\Code\Html\TagGenerator;

use Flex\Code\Html\Tag\Model\TagInterface;
use Flex\Code\Html\TagGenerator\Entity\Attribute;
use Flex\Code\Html\TagGenerator\Entity\AttributeManager;
use Flex\Code\Html\TagGenerator\Entity\Tag;
use Flex\Code\Html\TagGenerator\Entity\TagCollection;
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
     * @var TagCollection
     */
    protected $tags;

    /**
     * @var StringToCamelCase
     */
    protected $stringToCamelCaseConverter;

    /**
     * @param TagCollection $tags
     */
    public function __construct(TagCollection $tags)
    {
        $this->tags = $tags;
        $this->stringToCamelCaseConverter = new StringToCamelCase();
    }

    /**
     * @return void
     */
    public function generate()
    {
        $attributeManager = new AttributeManager();

        /** @var Tag $tag */
        foreach ($this->tags as $tag) {
            $tag->setAttributes($attributeManager->findAttributesForTag($tag));
            $this->generateTag($tag);
        }
    }

    /**
     * @param Tag $tagItem
     */
    protected function generateTag(Tag $tagItem)
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
     * @param Tag $tagItem
     * @return ClassGenerator
     */
    protected function createClass(Tag $tagItem)
    {
        $className = ucfirst($this->stringToCamelCaseConverter->convert($tagItem->getName()));
        $class = new ClassGenerator();
        $class->setNamespaceName('Flex\Code\Html\Tag');
        $class->setName($className);

        $class->addUse('Flex\Code\Html\Tag\Model\AbstractTag');
        $class->setExtendedClass('AbstractTag');

        $implementedInterfaces = [];

        if ($tagItem->isGlobalAttributeAware()) {
            $implementedInterfaces[] = 'GlobalAttributeAwareInterface';

            $class->addUse('Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareInterface');
            $class->addUse('Flex\Code\Html\Tag\Attribute\GlobalAttributeAwareTrait');
            $class->addTrait('GlobalAttributeAwareTrait');
        }

        if ($tagItem->isClipboardEventAware()) {
            $implementedInterfaces[] = 'ClipboardEventAwareInterface';

            $class->addUse('Flex\Code\Html\Tag\Event\ClipboardEventAwareInterface');
            $class->addUse('Flex\Code\Html\Tag\Event\ClipboardEventAwareTrait');
            $class->addTrait('ClipboardEventAwareTrait');
        }

        if ($tagItem->isFormEventAware()) {
            $implementedInterfaces[] = 'FormEventAwareInterface';

            $class->addUse('Flex\Code\Html\Tag\Event\FormEventAwareInterface');
            $class->addUse('Flex\Code\Html\Tag\Event\FormEventAwareTrait');
            $class->addTrait('FormEventAwareTrait');
        }

        if ($tagItem->isKeyboardEventAware()) {
            $implementedInterfaces[] = 'KeyboardEventAwareInterface';

            $class->addUse('Flex\Code\Html\Tag\Event\KeyboardEventAwareInterface');
            $class->addUse('Flex\Code\Html\Tag\Event\KeyboardEventAwareTrait');
            $class->addTrait('KeyboardEventAwareTrait');
        }

        if ($tagItem->isMediaEventAware()) {
            $implementedInterfaces[] = 'MediaEventAwareInterface';

            $class->addUse('Flex\Code\Html\Tag\Event\MediaEventAwareInterface');
            $class->addUse('Flex\Code\Html\Tag\Event\MediaEventAwareTrait');
            $class->addTrait('MediaEventAwareTrait');
        }

        if ($tagItem->isMiscEventAware()) {
            $implementedInterfaces[] = 'MiscEventAwareInterface';

            $class->addUse('Flex\Code\Html\Tag\Event\MiscEventAwareInterface');
            $class->addUse('Flex\Code\Html\Tag\Event\MiscEventAwareTrait');
            $class->addTrait('MiscEventAwareTrait');
        }

        if ($tagItem->isMouseEventAware()) {
            $implementedInterfaces[] = 'MouseEventAwareInterface';

            $class->addUse('Flex\Code\Html\Tag\Event\MouseEventAwareInterface');
            $class->addUse('Flex\Code\Html\Tag\Event\MouseEventAwareTrait');
            $class->addTrait('MouseEventAwareTrait');
        }

        if ($tagItem->isWindowEventAware()) {
            $implementedInterfaces[] = 'WindowEventAwareInterface';

            $class->addUse('Flex\Code\Html\Tag\Event\WindowEventAwareInterface');
            $class->addUse('Flex\Code\Html\Tag\Event\WindowEventAwareTrait');
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
     * @param Tag $tagItem
     */
    protected function addPropertyName(ClassGenerator $class, Tag $tagItem)
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
     * @param Tag $tagItem
     */
    public function addPropertyIsVoid(ClassGenerator $class, Tag $tagItem)
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
     * @param Tag $tagItem
     */
    protected function addPropertyFlags(ClassGenerator $class, Tag $tagItem)
    {
        $flags = [];

        foreach ($tagItem->getAttributes() as $tagAttribute) {
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
     * @param Tag $tagItem
     */
    protected function addAttributes(ClassGenerator $class, Tag $tagItem)
    {
        foreach ($tagItem->getAttributes() as $tagAttribute) {
            $this->addAttribute($class, $tagAttribute);
        }
    }

    /**
     * @param ClassGenerator $class
     * @param Attribute $tagAttribute
     */
    protected function addAttribute(ClassGenerator $class, Attribute $tagAttribute)
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

        if (!is_null($tagAttribute->getDescription())) {
            $docBlock->setLongDescription($tagAttribute->getDescription());
        }

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
        $generator->setFilename('src/Flex/Code/Html/Tag/' . $class->getName() . '.php');
        $generator->write();
    }
}
