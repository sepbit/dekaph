# Dekaph
DEKAtrian for PHp

[![Software License](https://img.shields.io/github/license/vitorteccom/dekaph.svg)](LICENSE)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/vitorteccom/dekaph.svg)](https://packagist.org/packages/vitorteccom/dekaph)
[![Total Downloads](https://img.shields.io/packagist/dt/vitorteccom/dekaph.svg)](https://packagist.org/packages/vitorteccom/dekaph)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vitorteccom/dekaph/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vitorteccom/dekaph/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/vitorteccom/dekaph/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/vitorteccom/dekaph/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/vitorteccom/dekaph/badges/build.png?b=master)](https://scrutinizer-ci.com/g/vitorteccom/dekaph/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/vitorteccom/dekaph/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

This is a simple library for converting dates between [Dekatrian](https://www.facebook.com/dekatrian/) and [Gregorian](https://en.wikipedia.org/wiki/Adoption_of_the_Gregorian_calendar) calendars. This library is not official.

This package is compatible with [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md), [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md).

## Structure
This is the directory structure.

```
build/
docs/
example/
src/
tests/
vendor/
```


## Install

Via Composer.

``` bash
$ composer require vitorteccom/dekaph
```

## Usage
This is minimal example.

``` php
<?php
require __DIR__ .'/../vendor/autoload.php';

use Vitorteccom\Dekaph\Dekatrian;
$dekaph = new Dekatrian;
```

Check date is valid.

``` php
<?=$dekaph->checkDekatrian(2018, 13, 28)?>
```
Return boolean, true.

Convert from dekatrian to gregorian.

``` php
<?=$dekaph->dekatoGreg(2018, 13, 28)?>
```
Return string, 2018-12-31.

Convert from gregorian to dekatrian.

``` php
<?=$dekaph->gregToDeka(2018, 12, 31)?>
```
Return string, 2018-13-28.

## Change log

Please see [CHANGELOG](docs/CHANGELOG.md) for more information on what has changed recently.

## Testing
Test with [PHPUnit](https://phpunit.de), we also recommend [Xdebug](https://xdebug.org).

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](docs/CONTRIBUTING.md) and [CODE_OF_CONDUCT](docs/CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ``contato@vitortec.com`` instead of using the issue tracker.

## Credits

- [Vitor Aloisio Guia](https://github.com/vitoranguia)
- [All Contributors](../../contributors)

## License

GPLv3. Please see [License File](LICENSE) for more information.
