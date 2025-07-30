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
            'var:preset|color|black' => 'border-r-black',
            'var:preset|color|white' => 'border-r-white',
            'var:preset|color|dark' => 'border-r-dark',
            'var:preset|color|light' => 'border-r-light',
            'var:preset|color|primary' => 'border-r-primary',
            'var:preset|color|secondary' => 'border-r-secondary',
            'var:preset|color|primary-light' => 'border-r-primary-light',
            'var:preset|color|secondary-light' => 'border-r-secondary-light'
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
