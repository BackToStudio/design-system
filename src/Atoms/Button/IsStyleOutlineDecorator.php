<?php

namespace BackTo\DesignSystem\Atoms\Button;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class IsStyleOutlineDecorator implements StyleDecorator
{
    private string $color;
    private IsStyleOutlineHoverDecorator $hoverDecorator;

    public function __construct(string $color = '')
    {
        $this->color = $color;
        $this->hoverDecorator = new IsStyleOutlineHoverDecorator($color);
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
        ];

        $textColor = $textColors[$this->color] ?? '';
        $borderColor = $borderColors[$this->color] ?? '';

        $classNames = [];
        $classNames[] = 'is-style-outline';
        $classNames[] = 'bg-transparent';
        $classNames[] = $textColor;
        $classNames[] = $borderColor;
        $classNames[] = $this->hoverDecorator->getClassName();

        return implode(' ', $classNames);
    }
}
