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
            'var:preset|spacing|2xs' => 'gap-x-2',
            'var:preset|spacing|xs' => 'gap-x-4',
            'var:preset|spacing|s' => 'gap-x-6',
            'var:preset|spacing|m' => 'gap-x-8',
            'var:preset|spacing|l' => 'gap-x-10',
            'var:preset|spacing|xl' => 'gap-x-16',
            'var:preset|spacing|2xl' => 'gap-x-20',
            'var:preset|spacing|3xl' => 'gap-x-32',
            'var:preset|spacing|4xl' => 'gap-x-40',
            'var:preset|spacing|5xl' => 'gap-x-48',
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
