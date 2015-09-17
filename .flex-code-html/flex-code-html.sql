-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `attribute`;
CREATE TABLE `attribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `default_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_flag` tinyint(1) NOT NULL DEFAULT '0',
  `is_html5` tinyint(1) NOT NULL DEFAULT '0',
  `is_html5_support` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_FA7AEFFBBAD26311` (`tag_id`),
  CONSTRAINT `attribute_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `attribute` (`id`, `tag_id`, `name`, `description`, `default_value`, `is_flag`, `is_html5`, `is_html5_support`) VALUES
(1,	1,	'async',	'Specifies that the script is executed asynchronously (only for external scripts)',	NULL,	1,	0,	0),
(2,	1,	'charset',	'Specifies the character encoding used in an external script file',	NULL,	0,	0,	0),
(3,	1,	'defer',	'Specifies that the script is executed when the page has finished parsing (only for external scripts)',	NULL,	1,	0,	0),
(4,	1,	'src',	'Specifies the URL of an external script file',	NULL,	0,	0,	0),
(5,	1,	'type',	'Specifies the media type of the script',	NULL,	0,	0,	0),
(6,	1,	'xml:space',	'Not supported in HTML5. Specifies whether whitespace in code should be preserved',	NULL,	0,	0,	0);

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci,
  `long_description` longtext COLLATE utf8_unicode_ci,
  `is_void` tinyint(1) DEFAULT '0',
  `is_global_attribute_aware` tinyint(1) DEFAULT '0',
  `is_clipboard_event_aware` tinyint(1) DEFAULT '0',
  `is_form_event_aware` tinyint(1) DEFAULT '0',
  `is_keyboard_event_aware` tinyint(1) DEFAULT '0',
  `is_media_event_aware` tinyint(1) DEFAULT '0',
  `is_misc_event_aware` tinyint(1) DEFAULT '0',
  `is_mouse_event_aware` tinyint(1) DEFAULT '0',
  `is_window_event_aware` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_389B7835E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tag` (`id`, `name`, `link`, `short_description`, `long_description`, `is_void`, `is_global_attribute_aware`, `is_clipboard_event_aware`, `is_form_event_aware`, `is_keyboard_event_aware`, `is_media_event_aware`, `is_misc_event_aware`, `is_mouse_event_aware`, `is_window_event_aware`) VALUES
(1,	'script',	'http://www.w3schools.com/tags/tag_script.asp',	'The <script> tag is used to define a client-side script, such as a JavaScript.',	'The <script> element either contains scripting statements, or it points to an external script file through the src attribute. Common uses for JavaScript are image manipulation, form validation, and dynamic changes of content.',	0,	1,	0,	0,	0,	0,	0,	0,	0),
(2,	'link',	'http://www.w3schools.com/tags/tag_link.asp',	'The <link> tag defines a link between a document and an external resource.',	'The <link> tag is used to link to external style sheets.',	1,	1,	0,	0,	0,	0,	0,	0,	0),
(3,	'div',	'http://www.w3schools.com/tags/tag_div.asp',	'The <div> tag defines a division or a section in an HTML document.',	'The <div> tag is used to group block-elements to format them with CSS.',	0,	1,	0,	0,	0,	0,	0,	0,	0),
(4,	'form',	'http://www.w3schools.com/tags/tag_form.asp',	'The <form> tag is used to create an HTML form for user input.',	NULL,	0,	1,	0,	0,	0,	0,	0,	0,	0),
(5,	'a',	'http://www.w3schools.com/tags/tag_a.asp',	'The <a> tag defines a hyperlink, which is used to link from one page to another.',	'The most important attribute of the <a> element is the href attribute, which indicates the link\'s destination. By default, links will appear as follows in all browsers: An unvisited link is underlined and blue, A visited link is underlined and purple, An active link is underlined and red.',	0,	1,	0,	0,	0,	0,	0,	0,	0),
(6,	'meta',	'http://www.w3schools.com/tags/tag_meta.asp',	'The <meta> tag provides metadata about the HTML document. Metadata will not be displayed on the page, but will be machine parsable.',	'Meta elements are typically used to specify page description, keywords, author of the document, last modified, and other metadata. The metadata can be used by browsers (how to display content or reload page), search engines (keywords), or other web services.',	1,	1,	0,	0,	0,	0,	0,	0,	0);

-- 2015-09-17 21:32:41
