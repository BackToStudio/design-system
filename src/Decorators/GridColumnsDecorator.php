<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class GridColumnsDecorator implements StyleDecorator
{
    private int $columns;

    public function __construct(int $columns)
    {
        $this->columns = $columns;
    }

    public function getClassName(): string
    {
        $flexBasisClassnames = [
            1 => 'grid-cols-1',
            2 => 'grid-cols-1 md:grid-cols-2',
            3 => 'grid-cols-1 md:grid-cols-3',
            4 => 'grid-cols-1 md:grid-cols-2 xl:grid-cols-4',
            5 => 'grid-cols-1 md:grid-cols-2 xl:grid-cols-5',
            6 => 'grid-cols-1 md:grid-cols-3 xl:grid-cols-6',
        ];

        $classes = '';

        if (array_key_exists($this->columns, $flexBasisClassnames)) {
            $classes = $flexBasisClassnames[$this->columns];
        }

        return $classes;
    }
}
