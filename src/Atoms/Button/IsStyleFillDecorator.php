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
        ];

        $borderColors = [
            'black' => 'border-black',
            'white' => 'border-white',
            'dark' => 'border-dark',
            'light' => 'border-light',
            'primary' => 'border-primary-light',
            'secondary' => 'border-secondary-light',
            'primary-light' => 'border-primary',
            'secondary-light' => 'border-secondary',
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
