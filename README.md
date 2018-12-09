Sorter
======

[![Sorter](https://img.shields.io/badge/PHP%20Advanced-ITEA-red.svg)](#sorter)

This is simple library for sort arrays.

Usage
-----

```php
...

$factory = new \Greeflas\Sorter\SorterStrategyFactory();

$sorter = new ArraySorter($data, $factory->createAscStrategy());
$sorter->sort();
```

Tests
-----

You can run tests with following command

```bash
$ ./tests/run
```
