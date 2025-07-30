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
        $borderColors = [
            'black' => 'hover:border-white',
            'white' => 'hover:border-black',
            'dark' => 'hover:border-light',
            'light' => 'hover:border-dark',
            'primary' => 'hover:border-primary-light',
            'secondary' => 'hover:border-secondary-light',
            'primary-light' => 'hover:border-primary',
            'secondary-light' => 'hover:border-secondary',
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
