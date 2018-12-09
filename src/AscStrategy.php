<?php

/*
 *
 * (c) Evgeniy Guba <evgeniyguba@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
