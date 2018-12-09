<?php

/*
 *
 * (c) Evgeniy Guba <evgeniyguba@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use App\Sorter\AscStrategy;
use App\Sorter\DescStrategy;
use App\Sorter\SorterStrategy;

require_once __DIR__ . '/../vendor/autoload.php';


$numbers = [4, 6, 10, 16, 1074, 643];
$words = ['this', 'is', 'sorting', 'test'];

$sorterAscNum = new SorterStrategy($numbers, new AscStrategy());
echo 'Sorting Num by Asc: <br>';
\var_dump($sorterAscNum->sort());
echo '<br>Set Desc this array:<br>';
$sorterAscNum->setSortStrategy(new DescStrategy());
\var_dump($sorterAscNum->sort());
echo '<br>';
