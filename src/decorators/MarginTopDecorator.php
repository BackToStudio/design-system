<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

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
            'var:preset|spacing|zero' => 'mt-0',
            'var:preset|spacing|2xs' => 'mt-2xs',
            'var:preset|spacing|xs' => 'mt-xs',
            'var:preset|spacing|s' => 'mt-s',
            'var:preset|spacing|m' => 'mt-m',
            'var:preset|spacing|l' => 'mt-l',
            'var:preset|spacing|xl' => 'mt-xl',
            'var:preset|spacing|2xl' => 'mt-2xl',
            'var:preset|spacing|3xl' => 'mt-3xl',
            'var:preset|spacing|4xl' => 'mt-4xl',
            'var:preset|spacing|5xl' => 'mt-5xl',
        ];

        $className = '';

        if (
            !empty($this->margin) &&
            array_key_exists($this->margin, $spacingTopClasses)
        ) {
            $className = $spacingTopClasses[$this->margin];
        }

        return $className;
    }
}
