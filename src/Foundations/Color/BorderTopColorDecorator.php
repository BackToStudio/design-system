<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BorderTopColorDecorator implements StyleDecorator
{
    private string $color = '';

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $borderTopColorClasses = [
            'black' => 'border-t-black',
            'white' => 'border-t-white',
            'dark' => 'border-t-dark',
            'light' => 'border-t-light',
            'primary' => 'border-t-primary',
            'secondary' => 'border-t-secondary',
            'primary-light' => 'border-t-primary-light',
            'secondary-light' => 'border-t-secondary-light'
        ];

        $className = '';

        if (
            !empty($this->color)
            && array_key_exists($this->color, $borderTopColorClasses)
        ) {
            $className = $borderTopColorClasses[$this->color];
        }

        return $className;
    }
}
