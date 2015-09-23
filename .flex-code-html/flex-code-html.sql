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
  KEY `TAG_ID` (`tag_id`),
  CONSTRAINT `attribute_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `attribute` (`id`, `tag_id`, `name`, `description`, `default_value`, `is_flag`, `is_html5`, `is_html5_support`) VALUES
(1,	1,	'async',	'Specifies that the script is executed asynchronously (only for external scripts)',	NULL,	1,	0,	0),
(2,	1,	'charset',	'Specifies the character encoding used in an external script file',	NULL,	0,	0,	0),
(3,	1,	'defer',	'Specifies that the script is executed when the page has finished parsing (only for external scripts)',	NULL,	1,	0,	0),
(4,	1,	'src',	'Specifies the URL of an external script file',	NULL,	0,	0,	0),
(5,	1,	'type',	'Specifies the media type of the script',	NULL,	0,	0,	0),
(6,	1,	'xml:space',	'Not supported in HTML5. Specifies whether whitespace in code should be preserved',	NULL,	0,	0,	0),
(7,	2,	'charset',	'Not supported in HTML5. Specifies the character encoding of the linked document.',	NULL,	0,	0,	0),
(8,	2,	'crossorigin',	'Specifies how the element handles cross-origin requests',	NULL,	0,	0,	0),
(9,	2,	'href',	'Specifies the location of the linked document',	NULL,	0,	0,	0),
(10,	2,	'hreflang',	'Specifies the language of the text in the linked document',	NULL,	0,	0,	0),
(11,	2,	'media',	'Specifies on what device the linked document will be displayed',	NULL,	0,	0,	0),
(12,	2,	'rel',	'Required. Specifies the relationship between the current document and the linked document',	NULL,	0,	0,	0),
(13,	2,	'rev',	'Not supported in HTML5. Specifies the relationship between the linked document and the current document',	NULL,	0,	0,	0),
(14,	2,	'sizes',	'Specifies the size of the linked resource. Only for rel=\"icon\"',	NULL,	0,	0,	0),
(15,	2,	'target',	'Not supported in HTML5. Specifies where the linked document is to be loaded',	NULL,	0,	0,	0),
(16,	2,	'type',	'Specifies the media type of the linked document',	NULL,	0,	0,	0),
(17,	3,	'align',	'Not supported in HTML5. Specifies the alignment of the content inside a <div> element',	NULL,	0,	0,	0),
(18,	4,	'accept',	'Not supported in HTML5. Specifies a comma-separated list of file types  that the server accepts (that can be submitted through the file upload)',	NULL,	0,	0,	0),
(19,	4,	'accept-charset',	'Specifies the character encodings that are to be used for the form submission',	NULL,	0,	0,	0),
(20,	4,	'action',	'Specifies where to send the form-data when a form is submitted',	NULL,	0,	0,	0),
(21,	4,	'autocomplete',	'Specifies whether a form should have autocomplete on or off',	NULL,	0,	0,	0),
(22,	4,	'enctype',	'Specifies how the form-data should be encoded when submitting it to the server (only for method=\"post\")',	NULL,	0,	0,	0),
(23,	4,	'method',	'Specifies the HTTP method to use when sending form-data',	NULL,	0,	0,	0),
(24,	4,	'name',	'Specifies the name of a form',	NULL,	0,	0,	0),
(25,	4,	'novalidate',	'Specifies that the form should not be validated when submitted',	NULL,	0,	0,	0),
(26,	4,	'target',	'Specifies where to display the response that is received after submitting the form',	NULL,	0,	0,	0),
(27,	5,	'charset',	'Not supported in HTML5. Specifies the character-set of a linked document',	NULL,	0,	0,	0),
(28,	5,	'coords',	'Not supported in HTML5. Specifies the coordinates of a link',	NULL,	0,	0,	0),
(29,	5,	'download',	'Specifies that the target will be downloaded when a user clicks on the hyperlink',	NULL,	0,	0,	0),
(30,	5,	'href',	'Specifies the URL of the page the link goes to',	NULL,	0,	0,	0),
(31,	5,	'hreflang',	'Specifies the language of the linked document',	NULL,	0,	0,	0),
(32,	5,	'media',	'Specifies what media/device the linked document is optimized for',	NULL,	0,	0,	0),
(33,	5,	'name',	'Not supported in HTML5. Use the global id attribute instead. Specifies the name of an anchor',	NULL,	0,	0,	0),
(34,	5,	'rel',	'Specifies the relationship between the current document and the linked document',	NULL,	0,	0,	0),
(35,	5,	'rev',	'Not supported in HTML5. Specifies the relationship between the linked document and the current document',	NULL,	0,	0,	0),
(36,	5,	'shape',	'Not supported in HTML5. Specifies the shape of a link',	NULL,	0,	0,	0),
(37,	5,	'target',	'Specifies where to open the linked document',	NULL,	0,	0,	0),
(38,	5,	'type',	'Specifies the media type of the linked document',	NULL,	0,	0,	0),
(39,	6,	'charset',	'Specifies the character encoding for the HTML document',	NULL,	0,	0,	0),
(40,	6,	'content',	'Gives the value associated with the http-equiv or name attribute',	NULL,	0,	0,	0),
(41,	6,	'http-equiv',	'Provides an HTTP header for the information/value of the content attribute',	NULL,	0,	0,	0),
(42,	6,	'name',	'Specifies a name for the metadata',	NULL,	0,	0,	0),
(43,	6,	'scheme',	'Not supported in HTML5. Specifies a scheme to be used to interpret the value of the content attribute',	NULL,	0,	0,	0),
(44,	6,	'property',	'NOT VALID in HTML5, only with correct doctype\r\n\r\n<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML+RDFa 1.0//EN\" \"http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd\">',	NULL,	0,	0,	0);

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

-- 2015-09-23 20:46:30
