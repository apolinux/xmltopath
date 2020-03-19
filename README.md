# Xmltopath

Converts simple XML document to xpath list

Returns a list of lines containing xpath routes. only works with tags, without attributes.

### Installation

```
composer require apolinux/xmltoxpath
```

### Example

```
./vendor/bin/xmltoxpath path/to/xmlfile.xml 
```

returns something like:

```
/movie/title
/movie/characters/character/name
/movie/characters/character/actor
/movie/characters/character/name
/movie/characters/character/actor
/movie/plot
/movie/great-lines/line
/movie/rating
/movie/rating
```

showing help:

```
./vendor/bin/xmltoxpath
Usage: xmltoxpath xmlfile [ u ]
Where: 
 - xmlfile: is the xml filename to process
 - u      : if appears then only show unique results
```

### Unit Testing

```
phpunit --bootstrap ./test/bootstrap.php test/XmlToXpathTest.php 
PHPUnit 6.2.3 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 89 ms, Memory: 10.00MB

OK (1 test, 2 assertions)

```