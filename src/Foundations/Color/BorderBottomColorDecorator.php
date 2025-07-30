<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BorderBottomColorDecorator implements StyleDecorator
{
    private string $color = '';

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $borderBottomColorClasses = [
            'black' => 'border-b-black',
            'white' => 'border-b-white',
            'dark' => 'border-b-dark',
            'light' => 'border-b-light',
            'primary' => 'border-b-primary',
            'secondary' => 'border-b-secondary',
            'primary-light' => 'border-b-primary-light',
            'secondary-light' => 'border-b-secondary-light'
        ];

        $className = '';

        if (
            !empty($this->color)
            && array_key_exists($this->color, $borderBottomColorClasses)
        ) {
            $className = $borderBottomColorClasses[$this->color];
        }

        return $className;
    }
}
