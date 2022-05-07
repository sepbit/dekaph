# Dekaph

> DEKAtrian for PHp

This is a simple library for converting dates between [Dekatrian](https://www.facebook.com/dekatrian/) and [Gregorian](https://en.wikipedia.org/wiki/Adoption_of_the_Gregorian_calendar) calendars. This library is not official.

This package is compatible with [PSR-12](https://www.php-fig.org/psr/psr-12), [PSR-4](https://www.php-fig.org/psr/psr-4) and [PHP Insights](https://phpinsights.com).

[Documentation](https://sepbit.gitlab.io/dekaph/documentation/) generated automatically with [PhpDocumentor](https://www.phpdoc.org/).

[Coverage](https://sepbit.gitlab.io/dekaph/coverage/) generated automatically with [PHPUnit](https://phpunit.de/).


## Install

This project uses [PHP](https://php.net) and [Composer](https://getcomposer.org).

```bash
$ composer require sepbit/dekaph
```

## Usage

This is minimal example.

```php
<?php
require __DIR__ .'/vendor/autoload.php';

use Sepbit\Dekaph\Dekatrian;

// Convert from Dekatrian to Gregorian calendars.
Dekatrian::dekaToGreg(2018, 13, 28);
// Return string, 2018-12-31

// Convert from Gregorian to Dekatrian calendars.
Dekatrian::gregToDeka(2018, 12, 31);
// Return string, 2018-13-28
```

## Contributing

Pull Requests not accepted.

## Security

If you discover any security related issues, please email `contato@sepbit.com` instead of using the issue tracker.

## License

GPL-3.0-or-later, please see [COPYING](COPYING) file for more information.
