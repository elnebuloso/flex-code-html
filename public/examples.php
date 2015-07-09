<?php
// error reporting
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'on');

// this makes our life easier when dealing with paths.
// everything is relative to the application root now.
chdir(dirname(__DIR__));

/** @noinspection PhpIncludeInspection */
require_once 'vendor/autoload.php';

// generating tag
$tag = \Flex\Code\Html\Tag\Script::create();
$tag->setSrc('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
$tag->isAsync(true);
$tag->isDefer(true);
var_dump((string) $tag);

// instant rendering
var_dump((string) \Flex\Code\Html\Tag\Script::create()->setSrc('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'));
var_dump((string) \Flex\Code\Html\Tag\Script::create()->setSrc('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')->isDefer(true)->setCharset('UTF-8'));

// generating tag over factory
$tagFactory = new \Flex\Code\Html\TagFactory();
$tagFactory->setDoctype(\Flex\Code\Html\TagInterface::DOCTYPE_HTML5);
$script = $tagFactory->create(\Flex\Code\Html\TagInterface::TAG_SCRIPT, array('src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'));
var_dump((string) $script);

var_dump((string) \Flex\Code\Html\Tag\Link::create()->setHref('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css')->setRel('stylesheet'));