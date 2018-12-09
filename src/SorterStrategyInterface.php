<?php
/**
 * Created by PhpStorm.
 * User: whoisthere
 * Date: 09.12.18
 * Time: 16:46
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