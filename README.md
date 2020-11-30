# flex-code-html

![abandoned](https://img.shields.io/badge/project-abandoned-red)

## Description

The Goal of this Package is to create a simple and MVC independent HTML Code Renderer.

## Requirements

The following versions of PHP are supported by this version.

* PHP 5.4
* PHP 5.5
* PHP 5.6
* PHP 7.0
* HHVM

## Coding Standards

Flex follows the standards defined in the PSR-0, PSR-1, PSR-2 and PSR-4 documents.

## Installation / Usage

Via Composer

``` json
{
    "require": {
        "elnebuloso/flex-code-html": "~1.0"
    }
}
```

## Examples

* each tag has a render method which returns the html code
* each tag has the magic "__toString" method which renders the html code over the render method
* the setter methods on the tag object are chainable
* you can define the doctype in which the tag should render
* the doctype e.g. decides how to close the tag (self-closing tag, void / non-void tags)
* each tag can have children of TagInterface or String which will be rendered as the tag body (only if tag is not marked as non-void tag)

#### see public/examples.php for more examples