# Documentation

The code is self-documenting, use [phpDocumentor](https://phpdoc.org) to build the documentation.

### Building

``` bash
$ wget https://phpdoc.org/phpDocumentor.phar
$ chmod +x phpDocumentor.phar
$ phpDocumentor.phar --visibility=public -d src/ -t doc/phpdoc/
```
