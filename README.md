# Dekaph
DEKAtrian for PHp

[![Software License](https://img.shields.io/github/license/vitorteccom/dekaph.svg)](LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/vitorteccom/dekaph.svg)](https://packagist.org/packages/vitorteccom/dekaph)
[![Total Downloads](https://img.shields.io/packagist/dt/vitorteccom/dekaph.svg)](https://packagist.org/packages/vitorteccom/dekaph)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vitorteccom/dekaph/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vitorteccom/dekaph/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/vitorteccom/dekaph/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/vitorteccom/dekaph/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/vitorteccom/dekaph/badges/build.png?b=master)](https://scrutinizer-ci.com/g/vitorteccom/dekaph/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/vitorteccom/dekaph/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

This is a simple library for converting dates between [Dekatrian](https://www.facebook.com/dekatrian/) and [Gregorian](https://en.wikipedia.org/wiki/Adoption_of_the_Gregorian_calendar) calendars. This library is not official.

This package is compatible with [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md).

## Structure

This is the directory structure.

```
docs/
src/
tests/
vendor/
```

## Install

Via Composer.

```bash
$ composer require vitorteccom/dekaph
```

## Usage

This is minimal example.

```php
<?php
require __DIR__ .'/../vendor/autoload.php';

use Vitorteccom\Dekaph\Dekatrian;

// Convert from Dekatrian to Gregorian calendars.
Dekatrian::dekatoGreg(2018, 13, 28);
// Return string, 2018-12-31

// Convert from Gregorian to Dekatrian calendars.
Dekatrian::gregToDeka(2018, 12, 31);
// Return string, 2018-13-28
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ``contato@vitortec.com`` instead of using the issue tracker.

## Credits

- [Vitor Guia](https://github.com/vitoranguia)
- [All Contributors](../../contributors)

## License

GPL-3.0-or-later. Please see [License File](LICENSE.md) for more information.
