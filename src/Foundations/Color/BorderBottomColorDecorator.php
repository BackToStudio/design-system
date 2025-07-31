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
            'var:preset|color|black' => 'border-b-black',
            'var:preset|color|white' => 'border-b-white',
            'var:preset|color|dark' => 'border-b-dark',
            'var:preset|color|light' => 'border-b-light',
            'var:preset|color|primary' => 'border-b-primary',
            'var:preset|color|secondary' => 'border-b-secondary',
            'var:preset|color|primary-light' => 'border-b-primary-light',
            'var:preset|color|secondary-light' => 'border-b-secondary-light',
            'var:preset|color|success' => 'border-b-success',
            'var:preset|color|success-light' => 'border-b-success-light',
            'var:preset|color|warning' => 'border-b-warning',
            'var:preset|color|warning-light' => 'border-b-warning-light',
            'var:preset|color|error' => 'border-b-error',
            'var:preset|color|error-light' => 'border-b-error-light',
            'var:preset|color|disabled' => 'border-b-disabled',
            'var:preset|color|disabled-light' => 'border-b-disabled-light',
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
