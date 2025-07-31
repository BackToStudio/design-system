<?php

namespace BackTo\DesignSystem\Atoms\Button;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class IsStyleLinkDecorator implements StyleDecorator
{
    private string $color;

    public function __construct(string $color = '')
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $textColors = [
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

        $textColor = $textColors[$this->color] ?? '';

        $classNames = [];
        $classNames[] = 'is-style-link';
        $classNames[] = 'border-transparent';
        $classNames[] = '!bg-transparent';
        $classNames[] = 'underline';
        $classNames[] = 'underline-offset-8';
        $classNames[] = $textColor;

        return implode(' ', $classNames);
    }
}
