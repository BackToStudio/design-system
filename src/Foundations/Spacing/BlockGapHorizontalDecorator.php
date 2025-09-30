<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BlockGapHorizontalDecorator implements StyleDecorator
{
    private string $blockGapHorizontal = '';

    public function __construct(string $blockGapHorizontal)
    {
        $this->blockGapHorizontal = $blockGapHorizontal;
    }

    public function getClassName(): string
    {
        $blockGapHorizontalClasses = [
            'var:preset|spacing|01-none' => 'gap-y-0 gap-x-0',
            'var:preset|spacing|02-2xs' => 'gap-y-2xs gap-x-2xs',
            'var:preset|spacing|03-xs' => 'gap-y-xs gap-x-xs',
            'var:preset|spacing|04-s' => 'gap-y-s gap-x-s',
            'var:preset|spacing|05-m' => 'gap-y-s gap-x-m',
            'var:preset|spacing|06-l' => 'gap-y-m gap-x-l',
            'var:preset|spacing|07-xl' => 'gap-y-l gap-x-xl',
            'var:preset|spacing|08-2xl' => 'gap-y-xl gap-x-2xl',
            'var:preset|spacing|09-3xl' => 'gap-y-2xl gap-x-3xl',
            'var:preset|spacing|10-4xl' => 'gap-y-3xl gap-x-4xl',
            'var:preset|spacing|11-5xl' => 'gap-y-4xl gap-x-5xl',
            'var:preset|spacing|12-global-padding' => 'gap-y-5xl gap-x-6xl',
        ];

        $className = '';

        if (
            !empty($this->blockGapHorizontal)
            && array_key_exists($this->blockGapHorizontal, $blockGapHorizontalClasses)
        ) {
            $className = $blockGapHorizontalClasses[$this->blockGapHorizontal];
        }

        return $className;
    }
}
