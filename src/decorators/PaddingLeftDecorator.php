<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

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
            'var:preset|spacing|zero' => 'pl-0',
            'var:preset|spacing|2xs' => 'pl-2xs',
            'var:preset|spacing|xs' => 'pl-xs',
            'var:preset|spacing|s' => 'pl-s',
            'var:preset|spacing|m' => 'pl-m',
            'var:preset|spacing|l' => 'pl-l',
            'var:preset|spacing|xl' => 'pl-xl',
            'var:preset|spacing|2xl' => 'pl-2xl',
            'var:preset|spacing|3xl' => 'pl-3xl',
            'var:preset|spacing|4xl' => 'pl-4xl',
            'var:preset|spacing|5xl' => 'pl-5xl',
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
