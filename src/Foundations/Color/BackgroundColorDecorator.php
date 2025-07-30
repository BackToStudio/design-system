<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BackgroundColorDecorator implements StyleDecorator
{
    private string $backgroundColor = '';

    public function __construct(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function getClassName(): string
    {
        $backgroundColorClasses = [
            'black' => 'bg-black text-white',
            'white' => 'bg-white text-black',
            'dark' => 'bg-dark text-light',
            'light' => 'bg-light text-dark',
            'primary' => 'bg-primary text-light',
            'secondary' => 'bg-secondary text-light',
            'primary-light' => 'bg-primary-light text-dark',
            'secondary-light' => 'bg-secondary-light text-dark'
        ];

        $className = '';

        if (
            !empty($this->backgroundColor)
            && array_key_exists($this->backgroundColor, $backgroundColorClasses)
        ) {
            $className = $backgroundColorClasses[$this->backgroundColor];
            $className .= ' has-background-color';
            $className .= ' has-background';
        }

        return $className;
    }
}
