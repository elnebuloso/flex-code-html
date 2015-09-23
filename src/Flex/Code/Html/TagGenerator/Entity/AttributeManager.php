<?php
namespace Flex\Code\Html\TagGenerator\Entity;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

class AttributeManager
{
    /**
     * @var Adapter
     */
    private $adapter;

    /**
     * @return self
     */
    public function __construct()
    {
        $this->adapter = new Adapter([
            'driver'   => 'Pdo_Mysql',
            'database' => 'flex-code-html',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8'
        ]);
    }

    /**
     * @param int $tagId
     * @param int $offset
     * @param int $limit
     * @param string $order
     * @return AttributeCollection
     */
    public function findAttributesByTagId($tagId, $offset = 0, $limit = PHP_INT_MAX, $order = 'name ASC')
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
        $select->from('attribute');
        $select->where(array('tag_id' => $tagId));
        $select->offset($offset);
        $select->limit($limit);
        $select->order($order);

        $statement = $sql->prepareStatementForSqlObject($select);
        $result = $statement->execute();

        $selectStatement = $this->adapter->createStatement('SELECT FOUND_ROWS() as total;');
        $total = $selectStatement->execute();
        $total = (int)$total->current();

        $collection = new AttributeCollection();
        $collection->setTotalCount($total);

        foreach ($result as $row) {
            $entity = $this->createEntity($row);
            $collection->addElement($entity, $entity->getId());
        }

        return $collection;
    }

    /**
     * @param Tag $tag
     * @param int $offset
     * @param int $limit
     * @param string $order
     * @return AttributeCollection
     */
    public function findAttributesForTag(Tag $tag, $offset = 0, $limit = PHP_INT_MAX, $order = 'name ASC')
    {
        return $this->findAttributesByTagId($tag->getId());
    }

    /**
     * @param array $row
     * @return Attribute
     */
    private function createEntity(array $row)
    {
        $entity = new Attribute();
        $entity->setId((int)$row['id']);
        $entity->setName($row['name']);
        $entity->setDescription($row['description']);
        $entity->setDefaultValue($row['default_value']);
        $entity->setIsFlag((int)$row['is_flag']);
        $entity->setIsHtml5((int)$row['is_html5']);
        $entity->setIsHtml5Support((int)$row['is_html5_support']);

        return $entity;
    }
}
