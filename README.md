# Streak PHP bindings

[![Latest Stable Version](https://poser.pugx.org/webmechanicx/streak/v/stable.svg)](https://packagist.org/packages/webmechanicx/streak)
[![Total Downloads](https://poser.pugx.org/webmechanicx/streak/downloads.svg)](https://packagist.org/packages/webmechanicx/streak)
[![License](https://poser.pugx.org/webmechanicx/streak/license.svg)](https://packagist.org/packages/webmechanicx/streak)

# Streak
You can sign up for a Streak account at https://streak.com

## Requirements

PHP 5.3.3 and later.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require webmechanicx/streak
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://github.com/webmechanicx/streak/releases). Then, to use the bindings, include the `init.php` file.

```php
require_once('/path/to/streak/init.php');
```

## Dependencies

The bindings require the following extension in order to work properly:

- [`curl`](https://secure.php.net/manual/en/book.curl.php), although you can use your own non-cURL client if you prefer
- [`json`](https://secure.php.net/manual/en/book.json.php)
- [`mbstring`](https://secure.php.net/manual/en/book.mbstring.php) (Multibyte String)

## Getting Started

Simple usage looks like:

```php
\Streak\Streak::setApiKey('<-- Your Streak API Key -->');

$pipeline = new \Streak\StreakPipeline;

$params	 = array(
			'name' => 'Foo',
			'description' => 'Bar'
			);

$data = $pipeline->createPipeline($params);

print_r( json_decode($data) );
```

## More Examples

you can download [Examples](https://github.com/webmechanicx/Streak/tree/master/examples) available with this package and getting started.

## Documentation

Please see https://www.streak.com/api/ for up-to-date documentation.
