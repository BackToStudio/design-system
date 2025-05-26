<?php

namespace PlusQuePro\DesignSystem\Foundations\Spacing;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

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
            'var:preset|spacing|zero' => 'ml-0',
            'var:preset|spacing|2xs' => 'ml-2xs',
            'var:preset|spacing|xs' => 'ml-xs',
            'var:preset|spacing|s' => 'ml-s',
            'var:preset|spacing|m' => 'ml-m',
            'var:preset|spacing|l' => 'ml-l',
            'var:preset|spacing|xl' => 'ml-xl',
            'var:preset|spacing|2xl' => 'ml-2xl',
            'var:preset|spacing|3xl' => 'ml-3xl',
            'var:preset|spacing|4xl' => 'ml-4xl',
            'var:preset|spacing|5xl' => 'ml-5xl',
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
