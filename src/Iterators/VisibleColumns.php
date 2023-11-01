<?php

namespace wisnubaldas\datatables\Iterators;


use FilterIterator;

/**
 * Class VisibleColumns
 *
 * @package wisnubaldas\datatables\Iterators
 */
class VisibleColumns extends FilterIterator
{

    /**
     * @return bool
     */
    public function accept(): bool
    {
        return !$this->current()->hidden;
    }
}