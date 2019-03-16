# Dekaph

[![Software License](https://img.shields.io/github/license/vitorteccom/dekaph.svg)](COPYING)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/vitorteccom/dekaph.svg)](https://packagist.org/packages/vitorteccom/dekaph)
[![Total Downloads](https://img.shields.io/packagist/dt/vitorteccom/dekaph.svg)](https://packagist.org/packages/vitorteccom/dekaph)
[![Build Status](https://travis-ci.com/vitorteccom/dekaph.svg?branch=master)](https://travis-ci.com/vitorteccom/dekaph)
[![Coverage Status](https://coveralls.io/repos/github/vitorteccom/dekaph/badge.svg?branch=master)](https://coveralls.io/github/vitorteccom/dekaph?branch=master)

> DEKAtrian for PHp

This is a simple library for converting dates between [Dekatrian](https://www.facebook.com/dekatrian/) and [Gregorian](https://en.wikipedia.org/wiki/Adoption_of_the_Gregorian_calendar) calendars. This library is not official.

This package is compatible with [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md).

## Install

This project uses [PHP](https://php.net) and [Composer](https://getcomposer.org).

```bash
$ composer require vitorteccom/dekaph
```

## Usage

This is minimal example.

```php
<?php
require __DIR__ .'/vendor/autoload.php';

use Vitorteccom\Dekaph\Dekatrian;

// Convert from Dekatrian to Gregorian calendars.
Dekatrian::dekaToGreg(2018, 13, 28);
// Return string, 2018-12-31

// Convert from Gregorian to Dekatrian calendars.
Dekatrian::gregToDeka(2018, 12, 31);
// Return string, 2018-13-28
```

## Contributing

Pull Requests not accepted, please contact us at: `contato@vitortec.com`.

### Contributors

- [Vitor Guia](https://github.com/vitoranguia)
- [All Contributors](https://github.com/vitorteccom/dekajs/contributors)

## License

GPL-3.0-or-later, please see [COPYING](COPYING) file for more information.
