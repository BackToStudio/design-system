<?php

namespace PlusQuePro\DesignSystem\Foundations\Layout;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class VerticalStackDecorator implements StyleDecorator
{
    private string $verticalAlign = '';

    public function __construct(string $verticalAlign)
    {
        $this->verticalAlign = $verticalAlign;
    }

    public function getClassName(): string
    {
        $verticalAlignClasses = [
            'top' => 'justify-start',
            'center' => 'justify-center',
            'bottom' => 'justify-end',
            'space-between' => 'justify-between',
        ];

        $className = '';

        if (array_key_exists($this->verticalAlign, $verticalAlignClasses)) {
            $className = $verticalAlignClasses[$this->verticalAlign];
        }

        return $className;
    }
}
