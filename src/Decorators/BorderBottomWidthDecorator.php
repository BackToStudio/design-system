<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderBottomWidthDecorator implements StyleDecorator
{
    private string $width = '';
    public function __construct(string $width)
    {
        $this->width = $width;
    }

    public function getClassName(): string
    {
        $borderBottomWidthClasses = [
            '1px' => 'border-b',
            '2px' => 'border-b-2',
            '4px' => 'border-b-4',
            '8px' => 'border-b-8',
        ];

        $className = '';

        if (
            !empty($this->width)
            && array_key_exists($this->width, $borderBottomWidthClasses)
        ) {
            $className = $borderBottomWidthClasses[$this->width];
        }

        return $className;
    }
}
