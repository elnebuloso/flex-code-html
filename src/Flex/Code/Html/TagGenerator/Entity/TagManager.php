<?php
namespace Flex\Code\Html\TagGenerator\Entity;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

class TagManager
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
     * @param int $id
     * @return Tag
     */
    public function findTagById($id)
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
        $select->from('tag');
        $select->where(array('id' => $id));
        $select->offset(0);
        $select->limit(1);

        $statement = $sql->prepareStatementForSqlObject($select);
        $result = $statement->execute();
        $result = $result->current();

        if (!$result) {
            return null;
        }

        return $this->createEntity($result);
    }

    /**
     * @param int $offset
     * @param int $limit
     * @param string $order
     * @return TagCollection
     */
    public function findTags($offset = 0, $limit = PHP_INT_MAX, $order = 'id ASC')
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
        $select->from('tag');
        $select->offset($offset);
        $select->limit($limit);
        $select->order($order);

        $statement = $sql->prepareStatementForSqlObject($select);
        $result = $statement->execute();

        $selectStatement = $this->adapter->createStatement('SELECT FOUND_ROWS() as total;');
        $total = $selectStatement->execute();
        $total = (int)$total->current();

        $collection = new TagCollection();
        $collection->setTotalCount($total);

        foreach ($result as $row) {
            $entity = $this->createEntity($row);
            $collection->addElement($entity, $entity->getId());
        }

        return $collection;
    }

    /**
     * @param array $row
     * @return Tag
     */
    private function createEntity(array $row)
    {
        $entity = new Tag();
        $entity->setId((int)$row['id']);
        $entity->setName($row['name']);
        $entity->setLink($row['link']);
        $entity->setShortDescription($row['short_description']);
        $entity->setLongDescription($row['long_description']);
        $entity->setIsVoid((int)$row['is_void'] === 1);
        $entity->setIsGlobalAttributeAware((int)$row['is_global_attribute_aware'] === 1);
        $entity->setIsClipboardEventAware((int)$row['is_clipboard_event_aware'] === 1);
        $entity->setIsFormEventAware((int)$row['is_form_event_aware'] === 1);
        $entity->setIsKeyboardEventAware((int)$row['is_keyboard_event_aware'] === 1);
        $entity->setIsMediaEventAware((int)$row['is_media_event_aware'] === 1);
        $entity->setIsMiscEventAware((int)$row['is_misc_event_aware'] === 1);
        $entity->setIsMouseEventAware((int)$row['is_mouse_event_aware'] === 1);
        $entity->setIsWindowEventAware((int)$row['is_window_event_aware'] === 1);

        return $entity;
    }
}