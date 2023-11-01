<?php

namespace wisnubaldas\Datatables\Iterators;


use FilterIterator;

/**
 * Class GlobalSearchableColumns
 *
 * @package wisnubaldas\Datatables\Iterators
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