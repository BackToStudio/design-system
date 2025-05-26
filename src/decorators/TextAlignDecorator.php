<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class TextAlignDecorator implements StyleDecorator
{
    private string $textAlign = '';

    public function __construct(string $textAlign)
    {
        $this->textAlign = $textAlign;
    }

    public function getClassName(): string
    {
        $textAlignClasses = [
            'left' => 'text-left',
            'center' => 'text-center',
            'right' => 'text-right',
        ];

        $className = '';

        if (
            !empty($this->textAlign)
            && array_key_exists($this->textAlign, $textAlignClasses)
        ) {
            $className = $textAlignClasses[$this->textAlign];
        }

        return $className;
    }
}
