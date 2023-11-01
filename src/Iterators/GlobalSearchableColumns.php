<?php

namespace wisnubaldas\datatables\Iterators;


use FilterIterator;

/**
 * Class GlobalSearchableColumns
 *
 * @package wisnubaldas\datatables\Iterators
 */
class GlobalSearchableColumns extends FilterIterator
{
    /**
     * @return bool
     */
    public function accept(): bool
    {
        return ($this->current()->forceSearch || (!$this->current()->hidden && $this->current()->isSearchable()));
    }
}