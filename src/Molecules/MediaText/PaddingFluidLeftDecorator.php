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
            'var:preset|spacing|2xs' => 'pl-2xs',
            'var:preset|spacing|xs' => '~pl-2xs/xs',
			'var:preset|spacing|s' => '~pl-xs/s',
			'var:preset|spacing|m' => '~pl-s/m',
			'var:preset|spacing|l' => '~pl-m/l',
			'var:preset|spacing|xl' => '~pl-l/xl',
			'var:preset|spacing|2xl' => '~pl-xl/2xl',
			'var:preset|spacing|3xl' => '~pl-2xl/3xl',
			'var:preset|spacing|4xl' => '~pl-3xl/4xl',
			'var:preset|spacing|5xl' => '~pl-4xl/5xl',
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
