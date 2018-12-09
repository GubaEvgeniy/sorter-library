<?php

/*
 *
 * (c) Evgeniy Guba <evgeniyguba@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Sorter;

/**
 *  Interface of sort strategy for array
 *
 */
interface SorterStrategyInterface
{
    /**
     * You must sort array by strategy declared in this class.
     *
     * @param array $data Array with data to sort.
     *
     * @return array Returns sorted array with data.
     */
    public function sort(array $data): array;
}
