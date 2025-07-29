<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BlockGapDecorator implements StyleDecorator
{
    private string $blockGap = '';

    public function __construct(string $blockGap)
    {
        $this->blockGap = $blockGap;
    }

    public function getClassName(): string
    {
        $blockGapClasses = [
            'var:preset|spacing|01-none' => 'gap-0',
            'var:preset|spacing|02-2xs' => 'gap-2xs',
            'var:preset|spacing|03-xs' => 'gap-xs',
            'var:preset|spacing|04-s' => 'gap-s',
            'var:preset|spacing|05-m' => 'gap-m',
            'var:preset|spacing|06-l' => 'gap-l',
            'var:preset|spacing|07-xl' => 'gap-xl',
            'var:preset|spacing|08-2xl' => 'gap-2xl',
            'var:preset|spacing|09-3xl' => 'gap-3xl',
            'var:preset|spacing|10-4xl' => 'gap-4xl',
            'var:preset|spacing|11-5xl' => 'gap-5xl',
            'var:preset|spacing|12-global-padding' => 'gap-6xl',
        ];

        $className = '';

        if (
            !empty($this->blockGap)
            && array_key_exists($this->blockGap, $blockGapClasses)
        ) {
            $className = $blockGapClasses[$this->blockGap];
        }

        return $className;
    }
}
