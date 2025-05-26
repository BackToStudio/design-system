<?php

namespace PlusQuePro\DesignSystem\Decorators;

class ColumnDecorator implements StyleDecorator
{
    private int $columns = 1;

    public function __construct(int $columns)
    {
        $this->columns = $columns;
    }

    public function getClassName(): string
    {
        $columnsClasses = [
            2 => 'grid-cols-2',
            3 => 'grid-cols-3',
            4 => 'grid-cols-4',
            5 => 'grid-cols-5',
            6 => 'grid-cols-6',
            7 => 'grid-cols-7',
            8 => 'grid-cols-8',
            9 => 'grid grid-cols-9',
            10 => 'grid-cols-10',
            11 => 'grid-cols-11',
            12 => 'grid-cols-12',
        ];

        $className = '';

        if (array_key_exists($this->columns, $columnsClasses)) {
            $className = $columnsClasses[$this->columns];
            $className .= ' grid';
        }

        return $className;
    }
}
