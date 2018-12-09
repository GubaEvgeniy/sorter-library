<?php
/**
 * Created by PhpStorm.
 * User: whoisthere
 * Date: 09.12.18
 * Time: 16:37
 */


use App\Sorter\{AscStrategy, DescStrategy, SorterStrategy};

require_once __DIR__ . '/../vendor/autoload.php';


$numbers = [4, 6, 10, 16, 1074, 643];
$words = ['this', 'is', 'sorting', 'test'];

$sorterAscNum = new SorterStrategy($numbers, new AscStrategy());
echo 'Sorting Num by Asc: <br>';
var_dump($sorterAscNum->sort());
echo '<br>Set Desc this array:<br>';
$sorterAscNum->setSortStrategy(new DescStrategy());
var_dump($sorterAscNum->sort());
echo '<br>';

