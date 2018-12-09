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
 * Class SorterStrategy
 * Basic logic to sorting. Definition of incoming sort
 *
 */
class SorterStrategy
{
    /**
     * SorterStrategy stores a link to one of the Strategy object and array
     *
     * @var array
     */
    private $data;
    private $sortStrategy;

    /**
     * SorterStrategy constructor.
     * Accept the strategy and array through the constructor
     *
     * @param array $data
     * @param SorterStrategyInterface $sorterStrategy
     */
    public function __construct(array $data, SorterStrategyInterface $sorterStrategy)
    {
        $this->sortStrategy = $sorterStrategy;
        $this->data = $data;
    }

    /**
     * Provides the setter to modify it during execution
     *
     * @param SorterStrategyInterface $sorterStrategy
     */
    public function setSortStrategy(SorterStrategyInterface $sorterStrategy): void
    {
        $this->sortStrategy = $sorterStrategy;
    }

    /**
     *
     * @return array Return sorted array.
     */
    public function sort(): array
    {
        return $this->sortStrategy->sort($this->data);
    }
}
