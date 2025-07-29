<?php

namespace BackTo\DesignSystem\Foundations\Effect;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BorderWidthDecorator implements StyleDecorator
{
    private string $width = '';
    public function __construct(string $width)
    {
        $this->width = $width;
    }

    public function getClassName(): string
    {
        $borderWidthClasses = [
            '1px' => 'border',
            '2px' => 'border-2',
            '4px' => 'border-4',
            '8px' => 'border-8',
        ];

        $className = '';

        if (
            !empty($this->width)
            && array_key_exists($this->width, $borderWidthClasses)
        ) {
            $className = $borderWidthClasses[$this->width];
        }

        return $className;
    }
}
