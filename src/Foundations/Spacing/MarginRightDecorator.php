<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class MarginRightDecorator implements StyleDecorator
{
    private string $margin = '';

    public function __construct(string $margin)
    {
        $this->margin = $margin;
    }

    public function getClassName(): string
    {
        $spacingRightClasses = [
            'var:preset|spacing|01-none' => 'mr-0',
            'var:preset|spacing|02-2xs' => 'mr-2xs',
            'var:preset|spacing|03-xs' => 'mr-xs',
            'var:preset|spacing|04-s' => 'mr-s',
            'var:preset|spacing|05-m' => 'mr-m',
            'var:preset|spacing|06-l' => 'mr-l',
            'var:preset|spacing|07-xl' => 'mr-xl',
            'var:preset|spacing|08-2xl' => 'mr-2xl',
            'var:preset|spacing|09-3xl' => 'mr-3xl',
            'var:preset|spacing|10-4xl' => 'mr-4xl',
            'var:preset|spacing|11-5xl' => 'mr-5xl',
            'var:preset|spacing|12-global-padding' => 'mr-6xl',
        ];

        $className = '';

        if (
            !empty($this->margin)
            && array_key_exists($this->margin, $spacingRightClasses)
        ) {
            $className = $spacingRightClasses[$this->margin];
        }

        return $className;
    }
}
