<?php
namespace Flex\Code\Html;

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
        TagInterface::TAG_SCRIPT => '\Flex\Code\Html\Tag\Script',
        TagInterface::TAG_LINK => '\Flex\Code\Html\Tag\Link'
    );

    /**
     * @param string $doctype
     */
    public function __construct($doctype = TagInterface::DOCTYPE_HTML5)
    {
        $this->doctype = $doctype;
    }

    /**
     * @param string $doctype
     */
    public function setDoctype($doctype)
    {
        $this->doctype = $doctype;
    }

    /**
     * @return string
     */
    public function getDoctype()
    {
        return $this->doctype;
    }

    /**
     * @param string $tag
     * @param array $attributes
     * @throws TagFactoryException
     * @return \Flex\Code\Html\TagInterface
     */
    public function create($tag, array $attributes = array())
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
