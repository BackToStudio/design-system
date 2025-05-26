<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class ColumnsGapThemeDecorator implements StyleDecorator
{
    private int $columnCount;

    public function __construct(int $columnCount)
    {
        $this->columnCount = $columnCount;
    }

    public function getClassName(): string
    {
        $columnCount = [
            1 => '',
            2 => 'gap-l md:gap-2xl lg:gap-4xl',
            3 => 'gap-l',
            4 => 'gap-l',
            5 => 'gap-l',
            6 => 'gap-l',
        ];

        return $columnCount[$this->columnCount] ?? '';
    }
}
