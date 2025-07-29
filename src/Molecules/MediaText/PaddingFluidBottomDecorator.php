<?php

namespace BackTo\DesignSystem\Molecules\MediaText;

use BackTo\DesignSystem\Atoms\StyleDecorator;

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
            'var:preset|spacing|01-none' => 'pb-0',
            'var:preset|spacing|02-2xs' => 'pb-2xs',
            'var:preset|spacing|03-xs' => '~pb-2xs/xs',
            'var:preset|spacing|04-s' => '~pb-xs/s',
            'var:preset|spacing|05-m' => '~pb-s/m',
            'var:preset|spacing|06-l' => '~pb-m/l',
            'var:preset|spacing|07-xl' => '~pb-l/xl',
            'var:preset|spacing|08-2xl' => '~pb-xl/2xl',
            'var:preset|spacing|09-3xl' => '~pb-2xl/3xl',
            'var:preset|spacing|10-4xl' => '~pb-3xl/4xl',
            'var:preset|spacing|11-5xl' => '~pb-4xl/5xl',
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
