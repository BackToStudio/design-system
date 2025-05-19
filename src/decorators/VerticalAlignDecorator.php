<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class VerticalAlignDecorator implements StyleDecorator
{
    private string $verticalAlign = '';

    public function __construct(string $verticalAlign)
    {
        $this->verticalAlign = $verticalAlign;
    }

    public function getClassName(): string
    {
        $verticalAlignClasses = [
            'top' => 'items-start',
            'center' => 'items-center',
            'bottom' => 'items-end',
            'stretch' => 'items-stretch',
        ];

        $className = '';

        if (array_key_exists($this->verticalAlign, $verticalAlignClasses)) {
            $className = $verticalAlignClasses[$this->verticalAlign];
        }

        return $className;
    }
}
