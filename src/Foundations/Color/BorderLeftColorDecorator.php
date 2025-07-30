<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BorderLeftColorDecorator implements StyleDecorator
{
    private string $color = '';

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $borderLeftColorClasses = [
            'black' => 'border-l-black',
            'white' => 'border-l-white',
            'dark' => 'border-l-dark',
            'light' => 'border-l-light',
            'primary' => 'border-l-primary',
            'secondary' => 'border-l-secondary',
            'primary-light' => 'border-l-primary-light',
            'secondary-light' => 'border-l-secondary-light'
        ];

        $className = '';

        if (
            !empty($this->color)
            && array_key_exists($this->color, $borderLeftColorClasses)
        ) {
            $className = $borderLeftColorClasses[$this->color];
        }

        return $className;
    }
}
