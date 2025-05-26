<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class TextFontSizeDecorator implements StyleDecorator
{
    private string $fontSize = '';

    public function __construct(string $fontSize)
    {
        $this->fontSize = $fontSize;
    }

    public function getClassName(): string
    {
        $fontSizeClasses = [
            'h1' => 'text-h1',
            'h2' => 'text-h2',
            'h3' => 'text-h3',
            'h4' => 'text-h4',
            'h5' => 'text-h5',
            'h6' => 'text-h6',
            'subtitle' => 'text-subtitle',
            'content' => 'text-content',
            'light-title' => 'text-light-title',
            'caption' => 'text-caption',
        ];

        $className = '';

        if (
            !empty($this->fontSize)
            && array_key_exists($this->fontSize, $fontSizeClasses)
        ) {
            $className = $fontSizeClasses[$this->fontSize];
        }

        return $className;
    }
}
