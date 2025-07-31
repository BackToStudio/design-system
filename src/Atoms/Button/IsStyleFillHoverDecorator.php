<?php

namespace BackTo\DesignSystem\Atoms\Button;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class IsStyleFillHoverDecorator implements StyleDecorator
{
    private string $color;

    public function __construct(string $color = '')
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $textColors = [
            'black' => 'hover:text-black',
            'white' => 'hover:text-white',
            'dark' => 'hover:text-dark',
            'light' => 'hover:text-light',
            'primary' => 'hover:text-primary',
            'secondary' => 'hover:text-secondary',
            'primary-light' => 'hover:text-primary-light',
            'secondary-light' => 'hover:text-secondary-light',
            'success' => 'hover:text-success',
            'success-light' => 'hover:text-success-light',
            'warning' => 'hover:text-warning',
            'warning-light' => 'hover:text-warning-light',
            'error' => 'hover:text-error',
            'error-light' => 'hover:text-error-light',
            'disabled' => 'hover:text-disabled',
            'disabled-light' => 'hover:text-disabled-light',
        ];

        $borderColors = [
            'black' => 'hover:border-white',
            'white' => 'hover:border-black',
            'dark' => 'hover:border-light',
            'light' => 'hover:border-dark',
            'primary' => 'hover:border-primary-light',
            'secondary' => 'hover:border-secondary-light',
            'primary-light' => 'hover:border-primary',
            'secondary-light' => 'hover:border-secondary',
            'success' => 'hover:border-success-light',
            'success-light' => 'hover:border-success',
            'warning' => 'hover:border-warning-light',
            'warning-light' => 'hover:border-warning',
            'error' => 'hover:border-error-light',
            'error-light' => 'hover:border-error',
            'disabled' => 'hover:border-disabled-light',
            'disabled-light' => 'hover:border-disabled',
        ];

        $backgroundColors = [
            'black' => 'hover:bg-white',
            'white' => 'hover:bg-black',
            'dark' => 'hover:bg-light',
            'light' => 'hover:bg-dark',
            'primary' => 'hover:bg-primary-light',
            'secondary' => 'hover:bg-secondary-light',
            'primary-light' => 'hover:bg-primary',
            'secondary-light' => 'hover:bg-secondary',
            'success' => 'hover:bg-success-light',
            'success-light' => 'hover:bg-success',
            'warning' => 'hover:bg-warning-light',
            'warning-light' => 'hover:bg-warning',
            'error' => 'hover:bg-error-light',
            'error-light' => 'hover:bg-error',
            'disabled' => 'hover:bg-disabled-light',
            'disabled-light' => 'hover:bg-disabled',
        ];

        $borderColor = $borderColors[$this->color] ?? '';
        $backgroundColor = $backgroundColors[$this->color] ?? '';

        $classNames = [];
        $classNames[] = $borderColor;
        $classNames[] = $backgroundColor;
        $classNames[] = 'transition ease-in duration-300';

        return implode(' ', $classNames);
    }
}
