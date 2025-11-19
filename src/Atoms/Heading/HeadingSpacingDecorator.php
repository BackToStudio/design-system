<?php

namespace BackTo\DesignSystem\Atoms\Heading;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class HeadingSpacingDecorator implements StyleDecorator
{
    private int $level;

    public function __construct(int $level = 2)
    {
        $this->level = $level;
    }

    public function getClassName(): string
    {
        $spacing = $this->getSpacingForLevel();

        $className = [];
        $className[] = '[&_+_*]:' . $spacing['top'] . ' [&_+_*]:md:' . $spacing['topMd'];
        $className[] = '[*_+_&]:' . $spacing['top'] . ' [*_+_&]:md:' . $spacing['topMd'];
        $className[] = '[&.text-caption_+_*]:!mt-xs [&.text-caption_+_*]:md:!mt-xs';

        return join(' ', $className);
    }

    private function getSpacingForLevel(): array
    {
        return match ($this->level) {
            1 => ['top' => 'mt-l', 'topMd' => 'mt-xl'],
            2 => ['top' => 'mt-m', 'topMd' => 'mt-l'],
            3 => ['top' => 'mt-s', 'topMd' => 'mt-m'],
            4, 5, 6 => ['top' => 'mt-xs', 'topMd' => 'mt-s'],
            default => ['top' => 'mt-s', 'topMd' => 'mt-m'],
        };
    }
}
