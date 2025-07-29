<?php

namespace BackTo\DesignSystem\Foundations\Layout;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class GridDecorator implements StyleDecorator
{
    private int $columnCount;

    public function __construct(int $columnCount = 3)
    {
        $this->columnCount = $columnCount;
    }

    public function getClassName(): string
    {
        $gridClasses = [
            1 => 'grid-cols-1',
            2 => 'grid-cols-1 grid-rows-2 lg:grid-cols-2 lg:grid-rows-1',
            3 => 'grid-cols-1 grid-rows-3 lg:grid-cols-3 lg:grid-rows-1',
            4 => 'grid-cols-1 grid-rows-4 md:grid-cols-2 md:grid-rows-2 lg:grid-cols-4 lg:grid-rows-1',
            5 => 'grid-cols-1 grid-rows-5 md:grid-cols-2 md:grid-rows-3 lg:grid-cols-5 lg:grid-rows-1',
            6 => 'grid-cols-1 grid-rows-6 md:grid-cols-3 md:grid-rows-2 lg:grid-cols-6 lg:grid-rows-1',
        ];

        if (!array_key_exists($this->columnCount, $gridClasses)) {
            throw new \Exception('Invalid column count for grid decorator');
        }

        return 'grid' . ' ' . $gridClasses[$this->columnCount];
    }
}
