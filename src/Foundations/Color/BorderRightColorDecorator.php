<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BorderRightColorDecorator implements StyleDecorator
{
    private string $color = '';

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $borderRightColorClasses = [
            'black' => 'border-r-black',
            'white' => 'border-r-white',
            'dark' => 'border-r-dark',
            'light' => 'border-r-light',
            'primary' => 'border-r-primary',
            'secondary' => 'border-r-secondary',
            'primary-light' => 'border-r-primary-light',
            'secondary-light' => 'border-r-secondary-light'
        ];

        $className = '';

        if (
            !empty($this->color)
            && array_key_exists($this->color, $borderRightColorClasses)
        ) {
            $className = $borderRightColorClasses[$this->color];
        }

        return $className;
    }
}
