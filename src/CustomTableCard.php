<?php

namespace Mako\CustomTableCard;

use Laravel\Nova\Card;

class CustomTableCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    static $header = [];

    static $data = [];

    public function __construct(array $header, array $data)
    {
        static::$header = $header;
        static::$data = $data;
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'custom-table-card';
    }
}
