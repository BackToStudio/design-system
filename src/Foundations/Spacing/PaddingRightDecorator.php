<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class PaddingRightDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        $spacingRightClasses = [
            'var:preset|spacing|01-none' => 'pr-0',
            'var:preset|spacing|02-2xs' => 'pr-2xs',
            'var:preset|spacing|03-xs' => 'pr-xs',
            'var:preset|spacing|04-s' => 'pr-s',
            'var:preset|spacing|05-m' => 'pr-m',
            'var:preset|spacing|06-l' => 'pr-l',
            'var:preset|spacing|07-xl' => 'pr-xl',
            'var:preset|spacing|08-2xl' => 'pr-2xl',
            'var:preset|spacing|09-3xl' => 'pr-3xl',
            'var:preset|spacing|10-4xl' => 'pr-4xl',
            'var:preset|spacing|11-5xl' => 'pr-5xl',
            'var:preset|spacing|12-global-padding' => 'pr-6xl',
        ];

        $className = '';

        if (
            !empty($this->padding)
            && array_key_exists($this->padding, $spacingRightClasses)
        ) {
            $className = $spacingRightClasses[$this->padding];
        }

        return $className;
    }
}
