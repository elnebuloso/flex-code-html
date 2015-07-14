<?php
namespace Flex\Code\Html\Generator;

use Flex\Code\Html\Generator\Entity\TagAttribute;
use Flex\Code\Html\Generator\Entity\TagItem;
use Flex\Code\Html\Tag\TagInterface;
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
class TagGenerator
{

    /**
     * @var array
     */
    private $data = array();

    /**
     * @var StringToCamelCase
     */
    private $converter;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->converter = new StringToCamelCase();
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
        $this->addPropertyDoctype($class, $tagItem);
        $this->addPropertyIsVoid($class, $tagItem);
        $this->addPropertyAttributes($class, $tagItem);
        $this->addPropertyFlags($class, $tagItem);
        $this->addPropertyFlagsHtml5($class, $tagItem);
        $this->addPropertyFlagsHtml5NoSupport($class, $tagItem);
        $this->addAttributes($class, $tagItem);
        $this->writeClass($class);
    }

    /**
     * @param TagItem $tagItem
     * @return ClassGenerator
     */
    protected function createClass(TagItem $tagItem)
    {
        $className = ucfirst($this->converter->convert($tagItem->getName()));
        $class = new ClassGenerator();
        $class->setNamespaceName('Flex\Code\Html\Tag\Element');
        $class->setName($className);
        $class->addUse('Flex\Code\Html\Tag\TagInterface');
        $class->addUse('Flex\Code\Html\Tag\AbstractTag');
        $class->setExtendedClass('AbstractTag');

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
     * @param TagItem $tagItem
     */
    public function addPropertyDoctype(ClassGenerator $class, TagItem $tagItem)
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
     * @param TagItem $tagItem
     */
    protected function addPropertyAttributes(ClassGenerator $class, TagItem $tagItem)
    {
        $property = new PropertyGenerator('attributes', array(), PropertyGenerator::FLAG_PROTECTED);

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
        $flags = array();

        foreach ($tagItem->getTagAttributes() as $tagAttribute) {
            if ($tagAttribute->isFlag()) {
                $flags[] = $tagAttribute->getName();
            }
        }

        sort($flags);

        $property = new PropertyGenerator('flags', array(), PropertyGenerator::FLAG_PROTECTED);
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
    protected function addPropertyFlagsHtml5(ClassGenerator $class, TagItem $tagItem)
    {
        $flags = array();

        foreach ($tagItem->getTagAttributes() as $tagAttribute) {
            if ($tagAttribute->isHtml5()) {
                $flags[] = $tagAttribute->getName();
            }
        }

        sort($flags);

        $property = new PropertyGenerator('flagsHtml5', array(), PropertyGenerator::FLAG_PROTECTED);
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
    protected function addPropertyFlagsHtml5NoSupport(ClassGenerator $class, TagItem $tagItem)
    {
        $flags = array();

        foreach ($tagItem->getTagAttributes() as $tagAttribute) {
            if (!$tagAttribute->isHtml5Support()) {
                $flags[] = $tagAttribute->getName();
            }
        }

        sort($flags);

        $property = new PropertyGenerator('flagsHtml5NoSupport', array(), PropertyGenerator::FLAG_PROTECTED);
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
        $methodName = ucfirst($this->converter->convert($methodName, '-'));

        $method = new MethodGenerator();

        if ($tagAttribute->isFlag()) {
            $method->setName('is' . $methodName);
            $method->setParameter(new ParameterGenerator('v', 'bool', true));
        } else {
            $method->setName('set' . $methodName);
            $method->setParameter(new ParameterGenerator('v', 'string', $tagAttribute->getDefault()));
        }

        $body = array();

        if ($tagAttribute->isHtml5()) {
            $body[] = 'if($this->doctype != TagInterface::DOCTYPE_HTML5 && in_array(\'' . $tagAttribute->getName() . '\', $this->flagsHtml5)) {';
            $body[] = 'return $this;';
            $body[] = '}';
            $body[] = '';
        }

        if (!$tagAttribute->isHtml5Support()) {
            $body[] = 'if($this->doctype == TagInterface::DOCTYPE_HTML5 && in_array(\'' . $tagAttribute->getName() . '\', $this->flagsHtml5NoSupport)) {';
            $body[] = 'return $this;';
            $body[] = '}';
            $body[] = '';
        }

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