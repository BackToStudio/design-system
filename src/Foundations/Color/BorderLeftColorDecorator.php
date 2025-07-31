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
            'var:preset|color|black' => 'border-l-black',
            'var:preset|color|white' => 'border-l-white',
            'var:preset|color|dark' => 'border-l-dark',
            'var:preset|color|light' => 'border-l-light',
            'var:preset|color|primary' => 'border-l-primary',
            'var:preset|color|secondary' => 'border-l-secondary',
            'var:preset|color|primary-light' => 'border-l-primary-light',
            'var:preset|color|secondary-light' => 'border-l-secondary-light',
            'var:preset|color|success' => 'border-l-success',
            'var:preset|color|success-light' => 'border-l-success-light',
            'var:preset|color|warning' => 'border-l-warning',
            'var:preset|color|warning-light' => 'border-l-warning-light',
            'var:preset|color|error' => 'border-l-error',
            'var:preset|color|error-light' => 'border-l-error-light',
            'var:preset|color|disabled' => 'border-l-disabled',
            'var:preset|color|disabled-light' => 'border-l-disabled-light',
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
