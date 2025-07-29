<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class PaddingLeftDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        $spacingLeftClasses = [
            'var:preset|spacing|01-none' => 'pl-0',
            'var:preset|spacing|02-2xs' => 'pl-2xs',
            'var:preset|spacing|03-xs' => 'pl-xs',
            'var:preset|spacing|04-s' => 'pl-s',
            'var:preset|spacing|05-m' => 'pl-m',
            'var:preset|spacing|06-l' => 'pl-l',
            'var:preset|spacing|07-xl' => 'pl-xl',
            'var:preset|spacing|08-2xl' => 'pl-2xl',
            'var:preset|spacing|09-3xl' => 'pl-3xl',
            'var:preset|spacing|10-4xl' => 'pl-4xl',
            'var:preset|spacing|11-5xl' => 'pl-5xl',
            'var:preset|spacing|12-global-padding' => 'pl-6xl',
        ];

        $className = '';

        if (
            !empty($this->padding)
            && array_key_exists($this->padding, $spacingLeftClasses)
        ) {
            $className = $spacingLeftClasses[$this->padding];
        }

        return $className;
    }
}
