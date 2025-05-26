<?php

namespace PlusQuePro\DesignSystem\Foundations\Spacing;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

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
            'var:preset|spacing|zero' => 'mb-0',
            'var:preset|spacing|2xs' => 'mb-2xs',
            'var:preset|spacing|xs' => 'mb-xs',
            'var:preset|spacing|s' => 'mb-s',
            'var:preset|spacing|m' => 'mb-m',
            'var:preset|spacing|l' => 'mb-l',
            'var:preset|spacing|xl' => 'mb-xl',
            'var:preset|spacing|2xl' => 'mb-2xl',
            'var:preset|spacing|3xl' => 'mb-3xl',
            'var:preset|spacing|4xl' => 'mb-4xl',
            'var:preset|spacing|5xl' => 'mb-5xl',
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
