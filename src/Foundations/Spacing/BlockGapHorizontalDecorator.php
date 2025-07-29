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
            'var:preset|spacing|01-none' => 'gap-x-0',
            'var:preset|spacing|02-2xs' => 'gap-x-2',
            'var:preset|spacing|03-xs' => 'gap-x-4',
            'var:preset|spacing|04-s' => 'gap-x-6',
            'var:preset|spacing|05-m' => 'gap-x-8',
            'var:preset|spacing|06-l' => 'gap-x-10',
            'var:preset|spacing|07-xl' => 'gap-x-16',
            'var:preset|spacing|08-2xl' => 'gap-x-20',
            'var:preset|spacing|09-3xl' => 'gap-x-32',
            'var:preset|spacing|10-4xl' => 'gap-x-40',
            'var:preset|spacing|11-5xl' => 'gap-x-48',
            'var:preset|spacing|12-global-padding' => 'gap-x-6xl',
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
