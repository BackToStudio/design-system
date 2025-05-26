<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderLeftWidthDecorator implements StyleDecorator
{
    private string $width = '';
    public function __construct(string $width)
    {
        $this->width = $width;
    }

    public function getClassName(): string
    {
        $borderLeftWidthClasses = [
            '1px' => 'border-l',
            '2px' => 'border-l-2',
            '4px' => 'border-l-4',
            '8px' => 'border-l-8',
        ];

        $className = '';

        if (
            !empty($this->width)
            && array_key_exists($this->width, $borderLeftWidthClasses)
        ) {
            $className = $borderLeftWidthClasses[$this->width];
        }

        return $className;
    }
}
