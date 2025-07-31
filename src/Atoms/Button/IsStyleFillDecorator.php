<?php

namespace BackTo\DesignSystem\Atoms\Button;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class IsStyleFillDecorator implements StyleDecorator
{
    private string $color;
    private IsStyleFillHoverDecorator $hoverDecorator;

    public function __construct(string $color = '')
    {
        $this->color = $color;
        $this->hoverDecorator = new IsStyleFillHoverDecorator($color);
    }

    public function getClassName(): string
    {
        $textColors = [
            'black' => 'text-white',
            'white' => 'text-black',
            'dark' => 'text-light',
            'light' => 'text-dark',
            'primary' => 'text-light',
            'secondary' => 'text-light',
            'primary-light' => 'text-dark',
            'secondary-light' => 'text-dark',
            'success' => 'text-success-light',
            'success-light' => 'text-success',
            'warning' => 'text-warning-light',
            'warning-light' => 'text-warning',
            'error' => 'text-error-light',
            'error-light' => 'text-error',
            'disabled' => 'text-disabled-light',
            'disabled-light' => 'text-disabled',
        ];

        $borderColors = [
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
            'disabled-light' => 'border-disabled-light',
        ];

        $backgroundColors = [
            'black' => 'bg-black',
            'white' => 'bg-white',
            'dark' => 'bg-dark',
            'light' => 'bg-light',
            'primary' => 'bg-primary',
            'secondary' => 'bg-secondary',
            'primary-light' => 'bg-primary-light',
            'secondary-light' => 'bg-secondary-light',
            'success' => 'bg-success',
            'success-light' => 'bg-success-light',
            'warning' => 'bg-warning',
            'warning-light' => 'bg-warning-light',
            'error' => 'bg-error',
            'error-light' => 'bg-error-light',
            'disabled' => 'bg-disabled',
            'disabled-light' => 'bg-disabled-light',
        ];

        $textColor = $textColors[$this->color] ?? '';
        $borderColor = $borderColors[$this->color] ?? '';
        $backgroundColor = $backgroundColors[$this->color] ?? '';

        $classNames = [];
        $classNames[] = 'is-style-fill';
        $classNames[] = $textColor;
        $classNames[] = $borderColor;
        $classNames[] = $backgroundColor;
        $classNames[] = $this->hoverDecorator->getClassName();

        return implode(' ', $classNames);
    }
}
