<?php

namespace BackTo\DesignSystem\Atoms\Button;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class IsStyleOutlineHoverDecorator implements StyleDecorator
{
    private string $color;

    public function __construct(string $color = '')
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $textColors = [
            'black' => 'hover:text-white',
            'white' => 'hover:text-black',
            'dark' => 'hover:text-light',
            'light' => 'hover:text-dark',
            'primary' => 'hover:text-light',
            'secondary' => 'hover:text-light',
            'primary-light' => 'hover:text-dark',
            'secondary-light' => 'hover:text-dark',
            'success' => 'hover:text-success-light',
            'success-light' => 'hover:text-success',
            'warning' => 'hover:text-warning-light',
            'warning-light' => 'hover:text-warning',
            'error' => 'hover:text-error-light',
            'error-light' => 'hover:text-error',
            'disabled' => 'hover:text-disabled-light',
            'disabled-light' => 'hover:text-disabled',
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

        $backgroundColor = [
            'black' => 'hover:bg-black',
            'white' => 'hover:bg-white',
            'dark' => 'hover:bg-dark',
            'light' => 'hover:bg-light',
            'primary' => 'hover:bg-primary',
            'secondary' => 'hover:bg-secondary',
            'primary-light' => 'hover:bg-primary-light',
            'secondary-light' => 'hover:bg-secondary-light',
            'success' => 'hover:bg-success-light',
            'success-light' => 'hover:bg-success',
            'warning' => 'hover:bg-warning-light',
            'warning-light' => 'hover:bg-warning',
            'error' => 'hover:bg-error-light',
            'error-light' => 'hover:bg-error',
            'disabled' => 'hover:bg-disabled-light',
            'disabled-light' => 'hover:bg-disabled',
        ];

        $textColor = $textColors[$this->color] ?? '';
        $borderColor = $borderColors[$this->color] ?? '';
        $backgroundColor = $backgroundColor[$this->color] ?? '';

        $classNames = [];
        $classNames[] = $textColor;
        $classNames[] = $borderColor;
        $classNames[] = $backgroundColor;
        $classNames[] = 'transition ease-in duration-300';

        return implode(' ', $classNames);
    }
}
