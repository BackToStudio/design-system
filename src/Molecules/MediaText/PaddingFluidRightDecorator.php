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
            'var:preset|spacing|01-none' => 'pr-0',
            'var:preset|spacing|02-2xs' => 'pr-2xs',
            'var:preset|spacing|03-xs' => '~pr-2xs/xs',
            'var:preset|spacing|04-s' => '~pr-xs/s',
            'var:preset|spacing|05-m' => '~pr-s/m',
            'var:preset|spacing|06-l' => '~pr-m/l',
            'var:preset|spacing|07-xl' => '~pr-l/xl',
            'var:preset|spacing|08-2xl' => '~pr-xl/2xl',
            'var:preset|spacing|09-3xl' => '~pr-2xl/3xl',
            'var:preset|spacing|10-4xl' => '~pr-3xl/4xl',
            'var:preset|spacing|11-5xl' => '~pr-4xl/5xl',
            'var:preset|spacing|12-global-padding' => '~pr-5xl/6xl',
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
