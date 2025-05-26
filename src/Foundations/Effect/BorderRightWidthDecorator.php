<?php

namespace PlusQuePro\DesignSystem\Foundations\Effect;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderRightWidthDecorator implements StyleDecorator
{
    private string $width = '';

    public function __construct(string $width)
    {
        $this->width = $width;
    }

    public function getClassName(): string
    {
        $borderRightWidthClasses = [
            '1px' => 'border-r',
            '2px' => 'border-r-2',
            '4px' => 'border-r-4',
            '8px' => 'border-r-8',
        ];

        $className = '';

        if (
            !empty($this->width)
            && array_key_exists($this->width, $borderRightWidthClasses)
        ) {
            $className = $borderRightWidthClasses[$this->width];
        }

        return $className;
    }
}
