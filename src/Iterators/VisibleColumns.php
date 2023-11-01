<?php

namespace wisnubaldas\Datatables\Iterators;


use FilterIterator;

/**
 * Class VisibleColumns
 *
 * @package wisnubaldas\Datatables\Iterators
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