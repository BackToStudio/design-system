<?php

namespace PlusQuePro\DesignSystem\Decorators;

class BorderBottomColorDecorator implements StyleDecorator
{
    private string $color = '';

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $borderBottomColorClasses = [
            'var:preset|color|white' => 'border-b-white',
            'var:preset|color|deep-10' => 'border-b-deep-10',
            'var:preset|color|primary-500' => 'border-b-primary-500',
            'var:preset|color|primary-950' => 'border-b-primary-950',
        ];

        $className = '';

        if (
            !empty($this->color) &&
            array_key_exists($this->color, $borderBottomColorClasses)
        ) {
            $className = $borderBottomColorClasses[$this->color];
        }

        return $className;
    }
}
