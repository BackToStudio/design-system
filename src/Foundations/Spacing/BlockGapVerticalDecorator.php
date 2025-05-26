<?php

namespace PlusQuePro\DesignSystem\Foundations\Spacing;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

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
            'var:preset|spacing|2xs' => 'gap-y-2',
            'var:preset|spacing|xs' => 'gap-y-4',
            'var:preset|spacing|s' => 'gap-y-6',
            'var:preset|spacing|m' => 'gap-y-8',
            'var:preset|spacing|l' => 'gap-y-10',
            'var:preset|spacing|xl' => 'gap-y-16',
            'var:preset|spacing|2xl' => 'gap-y-20',
            'var:preset|spacing|3xl' => 'gap-y-32',
            'var:preset|spacing|4xl' => 'gap-y-40',
            'var:preset|spacing|5xl' => 'gap-y-48',
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
