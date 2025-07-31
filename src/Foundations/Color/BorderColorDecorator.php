<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BorderColorDecorator implements StyleDecorator
{
    private string $borderColor = '';

    public function __construct(string $borderColor)
    {
        $this->borderColor = $borderColor;
    }

    public function getClassName(): string
    {
        $borderColorClasses = [
            'black' => 'border-black',
            'white' => 'border-white',
            'dark' => 'border-dark',
            'light' => 'border-light',
            'primary' => 'border-primary',
            'secondary' => 'border-secondary',
            'primary-light' => 'border-primary-light',
            'secondary-light' => 'border-secondary-light',
            'success' => 'border-success',
            'success-light' => 'border-success-light',
            'warning' => 'border-warning',
            'warning-light' => 'border-warning-light',
            'error' => 'border-error',
            'error-light' => 'border-error-light',
            'disabled' => 'border-disabled',
        ];

        $className = '';

        if (
            !empty($this->borderColor)
            && array_key_exists($this->borderColor, $borderColorClasses)
        ) {
            $className = $borderColorClasses[$this->borderColor];
        }

        return $className;
    }
}
