<?php

namespace PlusQuePro\DesignSystem\Atoms\Image;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class FloatAlignDecorator implements StyleDecorator
{
    private string $textAlign = '';

    public function __construct(string $textAlign)
    {
        $this->textAlign = $textAlign;
    }

    public function getClassName(): string
    {
        $textAlignClasses = [
            'left' => 'float-left mr-auto',
            'right' => 'float-right ml-auto',
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
