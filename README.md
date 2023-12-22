## PHP Similarity Checker

PHP class to check the similarity between two items

### Functions

- Calculates the similarity between two persons name 

Installation Guide via Composer:

```bash
composer require nanoblocktech/php-similarity-check
```

### Usages 

```php
use Luminova\ExtraUtils\SimilarityChecker\Check;

$check = new Check();
try {
    $score = $check->name('Peter Foo', 'Paul Foo'); 

    echo "Percentage: {$score->getRate()}%\n";
    echo "Ratio: $distance->getRatio() \n";
} catch (InvalidArgumentException $e){
    echo $e->getMessage();
}
```