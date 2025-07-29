<?php

namespace BackTo\DesignSystem\Foundations\Spacing;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BlockGapVerticalDecorator implements StyleDecorator
{
    private string $blockGapVertical = '';

    public function __construct(string $blockGapVertical)
    {
        $this->blockGapVertical = $blockGapVertical;
    }

    public function getClassName(): string
    {
        $blockGapVerticalClasses = [
            'var:preset|spacing|01-none' => 'gap-y-0',
            'var:preset|spacing|02-2xs' => 'gap-y-2',
            'var:preset|spacing|03-xs' => 'gap-y-4',
            'var:preset|spacing|04-s' => 'gap-y-6',
            'var:preset|spacing|05-m' => 'gap-y-8',
            'var:preset|spacing|06-l' => 'gap-y-10',
            'var:preset|spacing|07-xl' => 'gap-y-16',
            'var:preset|spacing|08-2xl' => 'gap-y-20',
            'var:preset|spacing|09-3xl' => 'gap-y-32',
            'var:preset|spacing|10-4xl' => 'gap-y-40',
            'var:preset|spacing|11-5xl' => 'gap-y-48',
            'var:preset|spacing|12-global-padding' => 'gap-y-6xl',
        ];

        $className = '';

        if (
            !empty($this->blockGapVertical)
            && array_key_exists($this->blockGapVertical, $blockGapVerticalClasses)
        ) {
            $className = $blockGapVerticalClasses[$this->blockGapVertical];
        }

        return $className;
    }
}
