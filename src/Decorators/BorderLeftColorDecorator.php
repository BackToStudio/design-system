<?php

namespace PlusQuePro\DesignSystem\Decorators;

class BorderLeftColorDecorator implements StyleDecorator
{
    private string $color = '';

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getClassName(): string
    {
        $borderLeftColorClasses = [
            'var:preset|color|white' => 'border-l-white',
            'var:preset|color|deep-10' => 'border-l-deep-10',
            'var:preset|color|primary-500' => 'border-l-primary-500',
            'var:preset|color|primary-950' => 'border-l-primary-950',
        ];

        $className = '';

        if (
            !empty($this->color) &&
            array_key_exists($this->color, $borderLeftColorClasses)
        ) {
            $className = $borderLeftColorClasses[$this->color];
        }

        return $className;
    }
}
