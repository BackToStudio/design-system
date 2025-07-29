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
            'var:preset|spacing|zero' => 'pt-0',
            'var:preset|spacing|2xs' => 'pt-2xs',
            'var:preset|spacing|xs' => 'pt-xs',
            'var:preset|spacing|s' => 'pt-s',
            'var:preset|spacing|m' => 'pt-m',
            'var:preset|spacing|l' => 'pt-l',
            'var:preset|spacing|xl' => 'pt-xl',
            'var:preset|spacing|2xl' => 'pt-2xl',
            'var:preset|spacing|3xl' => 'pt-3xl',
            'var:preset|spacing|4xl' => 'pt-4xl',
            'var:preset|spacing|5xl' => 'pt-5xl',
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
