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
            'var:preset|color|black' => 'border-t-black',
            'var:preset|color|white' => 'border-t-white',
            'var:preset|color|dark' => 'border-t-dark',
            'var:preset|color|light' => 'border-t-light',
            'var:preset|color|primary' => 'border-t-primary',
            'var:preset|color|secondary' => 'border-t-secondary',
            'var:preset|color|primary-light' => 'border-t-primary-light',
            'var:preset|color|secondary-light' => 'border-t-secondary-light'
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
