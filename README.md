### Container Package

A simple container that implement [PSR-11 Container](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md)

### Installation

`composer require unknownrori/container`

### Usage

```php

use UnknownRori\Container\Container;

$container = new Container();

$container->set('TestContainer', 'instance or something');

var_dump($container->get('TestContainer'));
```
