<?php
// error reporting
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'on');

// this makes our life easier when dealing with paths.
// everything is relative to the application root now.
chdir(dirname(__DIR__));

/** @noinspection PhpIncludeInspection */
require_once 'vendor/autoload.php';

use Flex\Code\Html\TagGenerator\Entity\TagManager;

$manager = new TagManager();
$tag = $manager->findTagById(1);
var_dump($tag);
//var_dump($manager->findTags());

$manager = new \Flex\Code\Html\TagGenerator\Entity\AttributeManager();
var_dump($manager->findAttributesForTag($tag));

$attributeManager = new AttributeManager();
$attributes = $attributeManager->findAttributesForTag($entity);