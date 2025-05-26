<?php

namespace PlusQuePro\DesignSystem\Foundations\Color;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderTopColorDecorator implements StyleDecorator
{
    private string $color = '';

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $borderTopColorClasses = [
            'var:preset|color|white' => 'border-t-white',
            'var:preset|color|deep-10' => 'border-t-deep-10',
            'var:preset|color|primary-500' => 'border-t-primary-500',
            'var:preset|color|primary-950' => 'border-t-primary-950',
        ];

        $className = '';

        if (
            !empty($this->color)
            && array_key_exists($this->color, $borderTopColorClasses)
        ) {
            $className = $borderTopColorClasses[$this->color];
        }

        return $className;
    }
}
