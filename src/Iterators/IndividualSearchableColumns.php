<?php

namespace wisnubaldas\datatables\Iterators;


use FilterIterator;

/**
 * Class IndividualSearchableColumns
 *
 * @package wisnubaldas\datatables\Iterators
 */
class IndividualSearchableColumns extends FilterIterator
{
    /**
     * @return bool
     */
    public function accept(): bool
    {
        return $this->current()->searchValue() !== '' || $this->current()->hasFilter();
    }
}