<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class TextDecorationDecorator implements StyleDecorator
{
    private string $textDecoration = '';

    public function __construct(string $textDecoration)
    {
        $this->textDecoration = $textDecoration;
    }

    public function getClassName(): string
    {
        $textDecorationClasses = [
            'underline' => 'underline',
            'line-through' => 'line-through',
        ];

        $className = '';

        if (
            !empty($this->textDecoration) &&
            array_key_exists($this->textDecoration, $textDecorationClasses)
        ) {
            $className = $textDecorationClasses[$this->textDecoration];
        }

        return $className;
    }
}
