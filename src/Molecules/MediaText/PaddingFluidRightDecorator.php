<?php

namespace PlusQuePro\DesignSystem\Molecules\MediaText;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class PaddingFluidRightDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        $spacingRightClasses = [
            'var:preset|spacing|zero' => 'pr-0',
            'var:preset|spacing|2xs' => 'pr-2xs',
            'var:preset|spacing|xs' => 'pr-xs',
            'var:preset|spacing|s' => 'pr-s',
            'var:preset|spacing|m' => 'pr-m',
            'var:preset|spacing|l' => 'pr-l',
            'var:preset|spacing|xl' => 'pr-xl',
            'var:preset|spacing|2xl' => 'pr-2xl',
            'var:preset|spacing|3xl' => 'pr-3xl',
            'var:preset|spacing|4xl' => 'pr-4xl',
            'var:preset|spacing|5xl' => 'pr-5xl',
        ];

        $className = '';

        if (
            !empty($this->padding)
            && array_key_exists($this->padding, $spacingRightClasses)
        ) {
            $className = $spacingRightClasses[$this->padding];
        }

        return $className;
    }
}
