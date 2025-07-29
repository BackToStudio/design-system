<?php

namespace BackTo\DesignSystem\Molecules\MediaText;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class PaddingFluidLeftDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        $spacingLeftClasses = [
            'var:preset|spacing|01-none' => 'pl-0',
            'var:preset|spacing|02-2xs' => 'pl-2xs',
            'var:preset|spacing|03-xs' => '~pl-2xs/xs',
            'var:preset|spacing|04-s' => '~pl-xs/s',
            'var:preset|spacing|05-m' => '~pl-s/m',
            'var:preset|spacing|06-l' => '~pl-m/l',
            'var:preset|spacing|07-xl' => '~pl-l/xl',
            'var:preset|spacing|08-2xl' => '~pl-xl/2xl',
            'var:preset|spacing|09-3xl' => '~pl-2xl/3xl',
            'var:preset|spacing|10-4xl' => '~pl-3xl/4xl',
            'var:preset|spacing|11-5xl' => '~pl-4xl/5xl',
            'var:preset|spacing|12-global-padding' => '~pl-5xl/6xl',
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
