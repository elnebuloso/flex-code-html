<?php
namespace Flex\Code\Html\Tag;

/**
 * Class TagFactory
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class TagFactory
{
    /**
     * @var string
     */
    protected $doctype = TagInterface::DOCTYPE_HTML5;

    /**
     * @var array
     */
    protected $tags = array(
        'a'      => '\Flex\Code\Html\Tag\Element\A',
        'div'    => '\Flex\Code\Html\Tag\Element\Div',
        'form'   => '\Flex\Code\Html\Tag\Element\Form',
        'link'   => '\Flex\Code\Html\Tag\Element\Link',
        'meta'   => '\Flex\Code\Html\Tag\Element\Meta',
        'script' => '\Flex\Code\Html\Tag\Element\Script'
    );

    /**
     * @param string $doctype
     */
    public function __construct($doctype = TagInterface::DOCTYPE_HTML5)
    {
        $this->doctype = $doctype;
    }

    /**
     * @param string $tag
     * @param array $attributes
     * @throws TagFactoryException
     * @return TagInterface
     */
    public function create($tag, array $attributes = [])
    {
        if (!array_key_exists($tag, $this->tags)) {
            throw new TagFactoryException('invalid tag: ' . $tag);
        }

        /** @var TagInterface $tag */
        $tag = new $this->tags[$tag]();
        $tag->setDoctype($this->doctype);
        $tag->setAttributes($attributes);

        return $tag;
    }
}
