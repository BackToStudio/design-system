<?php

namespace BackTo\DesignSystem\Molecules\MediaText;

use BackTo\DesignSystem\Atoms\StyleDecorator;

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
            'var:preset|spacing|2xs' => 'pr-2xs',
            'var:preset|spacing|xs' => '~pr-2xs/xs',
            'var:preset|spacing|s' => '~pr-xs/s',
            'var:preset|spacing|m' => '~pr-s/m',
            'var:preset|spacing|l' => '~pr-m/l',
            'var:preset|spacing|xl' => '~pr-l/xl',
            'var:preset|spacing|2xl' => '~pr-xl/2xl',
            'var:preset|spacing|3xl' => '~pr-2xl/3xl',
            'var:preset|spacing|4xl' => '~pr-3xl/4xl',
            'var:preset|spacing|5xl' => '~pr-4xl/5xl',
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
