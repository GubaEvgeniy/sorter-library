Sorter
======

[![Sorter](https://img.shields.io/badge/PHP%20Advanced-ITEA-red.svg)](#sorter)

This is simple library for sort arrays.

Usage
-----

```php
...

$sorterAscNum = new SorterStrategy($numbers, new AscStrategy());

$sorterAscNum->sort()
```
And change sorting order:

```php
...

$sorterAscNum->setSortStrategy(new DescStrategy());

$sorterAscNum->sort()
```

Tests
-----

You can run tests with following command

```bash
$ ./tests/run
```

or run in browser

```php
your.site/bin/sort.php
```