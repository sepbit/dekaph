# Dekaph

> DEKAtrian for PHp

This is a simple library for converting dates between [Dekatrian](https://www.facebook.com/dekatrian/) and [Gregorian](https://en.wikipedia.org/wiki/Adoption_of_the_Gregorian_calendar) calendars. This library is not official.

This package is compatible with [PSR-2](https://www.php-fig.org/psr/psr-2) and [PSR-4](https://www.php-fig.org/psr/psr-4).

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

## License

GPL-3.0-or-later, please see [COPYING](COPYING) file for more information.
