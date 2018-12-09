<?php
/**
 * Created by PhpStorm.
 * User: whoisthere
 * Date: 09.12.18
 * Time: 16:55
 */

namespace App\Sorter;

/**
 * Class SorterStrategy
 * Basic logic to sorting. Definition of incoming sort
 *
 * @package App\Sorter
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