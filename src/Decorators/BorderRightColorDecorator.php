<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderRightColorDecorator implements StyleDecorator
{
    private string $color = '';

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $borderRightColorClasses = [
            'var:preset|color|white' => 'border-r-white',
            'var:preset|color|deep-10' => 'border-r-deep-10',
            'var:preset|color|primary-500' => 'border-r-primary-500',
            'var:preset|color|primary-950' => 'border-r-primary-950',
        ];

        $className = '';

        if (
            !empty($this->color)
            && array_key_exists($this->color, $borderRightColorClasses)
        ) {
            $className = $borderRightColorClasses[$this->color];
        }

        return $className;
    }
}
