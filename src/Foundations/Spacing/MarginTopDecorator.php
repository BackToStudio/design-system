<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class MarginTopDecorator implements StyleDecorator
{
    private string $margin = '';

    public function __construct(string $margin)
    {
        $this->margin = $margin;
    }

    public function getClassName(): string
    {
        $spacingTopClasses = [
            'var:preset|spacing|01-none' => 'mt-0',
            'var:preset|spacing|02-2xs' => 'mt-2xs',
            'var:preset|spacing|03-xs' => 'mt-xs',
            'var:preset|spacing|04-s' => 'mt-s',
            'var:preset|spacing|05-m' => 'mt-m',
            'var:preset|spacing|06-l' => 'mt-l',
            'var:preset|spacing|07-xl' => 'mt-xl',
            'var:preset|spacing|08-2xl' => 'mt-2xl',
            'var:preset|spacing|09-3xl' => 'mt-3xl',
            'var:preset|spacing|10-4xl' => 'mt-4xl',
            'var:preset|spacing|11-5xl' => 'mt-5xl',
            'var:preset|spacing|12-global-padding' => 'mt-6xl',
        ];

        $className = '';

        if (
            !empty($this->margin)
            && array_key_exists($this->margin, $spacingTopClasses)
        ) {
            $className = $spacingTopClasses[$this->margin];
        }

        return $className;
    }
}
