<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class PaddingTopDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        $spacingTopClasses = [
            'var:preset|spacing|01-none' => 'pt-0',
            'var:preset|spacing|02-2xs' => 'pt-2xs',
            'var:preset|spacing|03-xs' => 'pt-xs',
            'var:preset|spacing|04-s' => 'pt-s',
            'var:preset|spacing|05-m' => 'pt-m',
            'var:preset|spacing|06-l' => 'pt-l',
            'var:preset|spacing|07-xl' => 'pt-xl',
            'var:preset|spacing|08-2xl' => 'pt-2xl',
            'var:preset|spacing|09-3xl' => 'pt-3xl',
            'var:preset|spacing|10-4xl' => 'pt-4xl',
            'var:preset|spacing|11-5xl' => 'pt-5xl',
            'var:preset|spacing|12-global-padding' => 'pt-6xl',
        ];

        $className = '';

        if (
            !empty($this->padding)
            && array_key_exists($this->padding, $spacingTopClasses)
        ) {
            $className = $spacingTopClasses[$this->padding];
        }

        return $className;
    }
}
