<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class MarginBottomDecorator implements StyleDecorator
{
    private string $margin = '';

    public function __construct(string $margin)
    {
        $this->margin = $margin;
    }

    public function getClassName(): string
    {
        $spacingBottomClasses = [
            'var:preset|spacing|01-none' => 'mb-0',
            'var:preset|spacing|02-2xs' => 'mb-2xs',
            'var:preset|spacing|03-xs' => 'mb-xs',
            'var:preset|spacing|04-s' => 'mb-s',
            'var:preset|spacing|05-m' => 'mb-m',
            'var:preset|spacing|06-l' => 'mb-l',
            'var:preset|spacing|07-xl' => 'mb-xl',
            'var:preset|spacing|08-2xl' => 'mb-2xl',
            'var:preset|spacing|09-3xl' => 'mb-3xl',
            'var:preset|spacing|10-4xl' => 'mb-4xl',
            'var:preset|spacing|11-5xl' => 'mb-5xl',
            'var:preset|spacing|12-global-padding' => 'mb-6xl',
        ];

        $className = '';

        if (
            !empty($this->margin)
            && array_key_exists($this->margin, $spacingBottomClasses)
        ) {
            $className = $spacingBottomClasses[$this->margin];
        }

        return $className;
    }
}
