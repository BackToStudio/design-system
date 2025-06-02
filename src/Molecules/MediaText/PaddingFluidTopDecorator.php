<?php

namespace PlusQuePro\DesignSystem\Molecules\MediaText;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class PaddingFluidTopDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        // mobile: pt-s, desktop: pt-m
        $spacingsMediaText = [
            'var:preset|spacing|2xs' => 'pt-2xs',
            'var:preset|spacing|xs' => '~pt-2xs/xs',
            'var:preset|spacing|s' => '~pt-xs/s',
            'var:preset|spacing|m' => '~pt-s/m',
            'var:preset|spacing|l' => '~pt-m/l',
            'var:preset|spacing|xl' => '~pt-l/xl',
            'var:preset|spacing|2xl' => '~pt-xl/2xl',
            'var:preset|spacing|3xl' => '~pt-2xl/3xl',
            'var:preset|spacing|4xl' => '~pt-3xl/4xl',
            'var:preset|spacing|5xl' => '~pt-4xl/5xl',
        ];

        $className = '';

        if (
            !empty($this->padding)
            && array_key_exists($this->padding, $spacingsMediaText)
        ) {
            $className = $spacingsMediaText[$this->padding];
        }

        return $className;
    }
}
