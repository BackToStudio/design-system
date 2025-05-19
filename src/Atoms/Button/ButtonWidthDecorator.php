<?php

namespace PlusQuePro\DesignSystem\Atoms\Button;

use PlusQuePro\DesignSystem\StyleDecorator;

class ButtonWidthDecorator implements StyleDecorator
{
    private int $width = 0;

    public function __construct(int $width)
    {
        $this->width = $width;
    }

    public function getClassName(): string
    {
        $widthClasses = [
            0 => 'flex-none',
            25 => 'basis-[25%]',
            50 => 'basis-[50%]',
            75 => 'basis-[75%]',
            100 => 'basis-full',
        ];

        $className = '';

        if (array_key_exists($this->width, $widthClasses)) {
            $className = $widthClasses[$this->width];
        }

        return $className;
    }
}
