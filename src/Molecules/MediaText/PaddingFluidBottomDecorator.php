<?php

namespace PlusQuePro\DesignSystem\Molecules\MediaText;

use PlusQuePro\DesignSystem\StyleDecorator;

class PaddingFluidBottomDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        // mobile: pb-s, desktop: pb-m
        $spacingsMediaText = [
            'var:preset|spacing|xs' => '~pb-2xs/xs',
            'var:preset|spacing|s' => '~pb-xs/s',
            'var:preset|spacing|m' => '~pb-s/m',
            'var:preset|spacing|l' => '~pb-m/l',
            'var:preset|spacing|xl' => '~pb-l/xl',
            'var:preset|spacing|2xl' => '~pb-xl/2xl',
            'var:preset|spacing|3xl' => '~pb-2xl/3xl',
            'var:preset|spacing|4xl' => '~pb-3xl/4xl',
            'var:preset|spacing|5xl' => '~pb-4xl/5xl',
        ];

        $className = '';

        if (
            !empty($this->padding) &&
            array_key_exists($this->padding, $spacingsMediaText)
        ) {
            $className = $spacingsMediaText[$this->padding];
        }

        return $className;
    }
}
