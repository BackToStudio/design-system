<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class TextColorDecorator implements StyleDecorator
{
    private string $textColor = '';

    public function __construct(string $textColor)
    {
        $this->textColor = $textColor;
    }

    public function getClassName(): string
    {
        $textColorClasses = [
            'black' => 'text-black',
            'white' => 'text-white',
            'dark' => 'text-dark',
            'light' => 'text-light',
            'primary' => 'text-primary',
            'secondary' => 'text-secondary',
            'primary-light' => 'text-primary-light',
            'secondary-light' => 'text-secondary-light',
            'success' => 'text-success',
            'success-light' => 'text-success-light',
            'warning' => 'text-warning',
            'warning-light' => 'text-warning-light',
            'error' => 'text-error',
            'error-light' => 'text-error-light',
            'disabled' => 'text-disabled',
            'disabled-light' => 'text-disabled-light',
        ];

        $className = '';

        if (
            !empty($this->textColor)
            && array_key_exists($this->textColor, $textColorClasses)
        ) {
            $className = $textColorClasses[$this->textColor];
            $className .= ' has-text-color';
        }

        return $className;
    }
}
