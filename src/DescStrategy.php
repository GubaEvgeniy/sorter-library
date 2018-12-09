<?php
/**
 * Created by PhpStorm.
 * User: whoisthere
 * Date: 09.12.18
 * Time: 16:54
 */

namespace App\Sorter;


class DescStrategy implements SorterStrategyInterface
{
    /**
     * {@inheritdoc}
     */

    public function sort(array $data): array
    {
        \arsort($data);

        return $data;
    }
}