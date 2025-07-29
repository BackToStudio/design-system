<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class MarginLeftDecorator implements StyleDecorator
{
    private string $margin = '';

    public function __construct(string $margin)
    {
        $this->margin = $margin;
    }

    public function getClassName(): string
    {
        $spacingLeftClasses = [
            'var:preset|spacing|01-none' => 'ml-0',
            'var:preset|spacing|02-2xs' => 'ml-2xs',
            'var:preset|spacing|03-xs' => 'ml-xs',
            'var:preset|spacing|04-s' => 'ml-s',
            'var:preset|spacing|05-m' => 'ml-m',
            'var:preset|spacing|06-l' => 'ml-l',
            'var:preset|spacing|07-xl' => 'ml-xl',
            'var:preset|spacing|08-2xl' => 'ml-2xl',
            'var:preset|spacing|09-3xl' => 'ml-3xl',
            'var:preset|spacing|10-4xl' => 'ml-4xl',
            'var:preset|spacing|11-5xl' => 'ml-5xl',
            'var:preset|spacing|12-global-padding' => 'ml-6xl',
        ];

        $className = '';

        if (
            !empty($this->margin)
            && array_key_exists($this->margin, $spacingLeftClasses)
        ) {
            $className = $spacingLeftClasses[$this->margin];
        }

        return $className;
    }
}
