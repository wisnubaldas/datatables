<?php

namespace wisnubaldas\Datatables\Iterators;


use FilterIterator;

/**
 * Class IndividualSearchableColumns
 *
 * @package wisnubaldas\Datatables\Iterators
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