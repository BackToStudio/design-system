<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class PaddingBottomDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        $spacingBottomClasses = [
            'var:preset|spacing|01-none' => 'pb-0',
            'var:preset|spacing|02-2xs' => 'pb-2xs',
            'var:preset|spacing|03-xs' => 'pb-xs',
            'var:preset|spacing|04-s' => 'pb-s',
            'var:preset|spacing|05-m' => 'pb-m',
            'var:preset|spacing|06-l' => 'pb-l',
            'var:preset|spacing|07-xl' => 'pb-xl',
            'var:preset|spacing|08-2xl' => 'pb-2xl',
            'var:preset|spacing|09-3xl' => 'pb-3xl',
            'var:preset|spacing|10-4xl' => 'pb-4xl',
            'var:preset|spacing|11-5xl' => 'pb-5xl',
            'var:preset|spacing|12-global-padding' => 'pb-6xl',
        ];

        $className = '';

        if (
            !empty($this->padding)
            && array_key_exists($this->padding, $spacingBottomClasses)
        ) {
            $className = $spacingBottomClasses[$this->padding];
        }

        return $className;
    }
}
