<?php

namespace PlusQuePro\DesignSystem\Foundations\Effect;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderTopWidthDecorator implements StyleDecorator
{
    private string $width = '';
    public function __construct(string $width)
    {
        $this->width = $width;
    }

    public function getClassName(): string
    {
        $borderTopWidthClasses = [
            '1px' => 'border-t',
            '2px' => 'border-t-2',
            '4px' => 'border-t-4',
            '8px' => 'border-t-8',
        ];

        $className = '';

        if (
            !empty($this->width)
            && array_key_exists($this->width, $borderTopWidthClasses)
        ) {
            $className = $borderTopWidthClasses[$this->width];
        }

        return $className;
    }
}
