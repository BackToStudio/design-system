<?php

namespace BackTo\DesignSystem\Molecules\MediaText;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class PaddingFluidTopDecorator implements StyleDecorator
{
    private string $padding = '';

    public function __construct(string $padding)
    {
        $this->padding = $padding;
    }

    public function getClassName(): string
    {
        $spacingsMediaText = [
            'var:preset|spacing|01-none' => 'pt-0',
            'var:preset|spacing|02-2xs' => 'pt-2xs',
            'var:preset|spacing|03-xs' => '~pt-2xs/xs',
            'var:preset|spacing|04-s' => '~pt-xs/s',
            'var:preset|spacing|05-m' => '~pt-s/m',
            'var:preset|spacing|06-l' => '~pt-m/l',
            'var:preset|spacing|07-xl' => '~pt-l/xl',
            'var:preset|spacing|08-2xl' => '~pt-xl/2xl',
            'var:preset|spacing|09-3xl' => '~pt-2xl/3xl',
            'var:preset|spacing|10-4xl' => '~pt-3xl/4xl',
            'var:preset|spacing|11-5xl' => '~pt-4xl/5xl',
            'var:preset|spacing|12-global-padding' => '~pt-5xl/6xl',
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
