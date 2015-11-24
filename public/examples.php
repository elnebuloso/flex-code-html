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
$tag->setAttribute('data-foo', '1231345');
var_dump((string)$tag);

// instant rendering
var_dump((string)\Flex\Code\Html\Tag\Script::create()->setSrc('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'));
var_dump((string)\Flex\Code\Html\Tag\Script::create()->setSrc('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')->isDefer(true)->setCharset('UTF-8'));
var_dump((string)\Flex\Code\Html\Tag\Link::create()->setHref('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css')->setRel('stylesheet'));

// adding child onto non-void elements
$tag1 = \Flex\Code\Html\Tag\Div::create();
$tag1->addChild('baz');

$tag2 = \Flex\Code\Html\Tag\Div::create();
$tag2->addChild('bar');

$tag3 = \Flex\Code\Html\Tag\Div::create();
$tag3->addChild('barbaz');

$tag4 = \Flex\Code\Html\Tag\Div::create();
$tag4->addChild('foobar');

$tag1->addChild($tag2);
$tag2->addChild($tag3);
$tag2->addChild($tag4);
var_dump((string)$tag1);