<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class AlignDecorator implements StyleDecorator
{
    private string $alignment = 'default';

    public function __construct(string $alignment)
    {
        $this->alignment = $alignment;
    }

    public function getClassName(): string
    {
        $alignmentClasses = [
            'default' => 'aligndefault max-w-default mx-auto',
            'wide' => 'alignwide max-w-wide mx-auto',
            'full' => 'alignfull max-w-none w-full mx-0',
        ];

        $className = '';

        if (
            !empty($this->alignment)
            && array_key_exists($this->alignment, $alignmentClasses)
        ) {
            $className = $alignmentClasses[$this->alignment];
        }

        return $className;
    }
}
