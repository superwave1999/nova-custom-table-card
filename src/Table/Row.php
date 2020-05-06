<?php

namespace Superwave1999\CustomTableCard\Table;

use Superwave1999\CustomTableCard\ToArrayInterface;

class Row implements ToArrayInterface
{
    const CLASS_SUCCESS = 'card-col-success';

    const CLASS_WARNING = 'card-col-warning';

    const CLASS_ERROR = 'card-col-error';

    const CLASS_INFO = 'card-col-info';

    const CLASS_WAITING = 'card-col-waiting';

    public $columns;

    public $classes = null;

    public $viewLink;

    public function __construct(...$columns)
    {
        foreach ($columns as $column) {
            $this->columns[] = $column->toArray();
        }
    }

    public function class(string $class) : Row
    {
        $this->classes[] = $class;

        return $this;
    }

    public function viewLink(string $link) : Row
    {
        $this->viewLink = $link;

        return $this;
    }

    public function toArray() : array
    {
        return [
            'columns'   =>  $this->columns,
            'view'      =>  $this->viewLink,
            'class'     =>  implode(' ', $this->classes ?? ['']),
        ];
    }
}
