<?php
/**
 * Created by PhpStorm.
 * User: whoisthere
 * Date: 09.12.18
 * Time: 16:53
 */

namespace App\Sorter;


class AscStrategy implements SorterStrategyInterface
{
    /**
     * {@inheritdoc}
     */

    public function sort(array $data): array
    {
        \asort($data);

        return $data;
    }
}