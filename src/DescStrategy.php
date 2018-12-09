<?php

/*
 *
 * (c) Evgeniy Guba <evgeniyguba@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
