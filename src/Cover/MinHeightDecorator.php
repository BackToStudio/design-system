<?php

namespace PlusQuePro\DesignSystem\Cover;

use PlusQuePro\DesignSystem\StyleDecorator;

class MinHeightDecorator implements StyleDecorator
{
    private string $minHeight = '';

    public function __construct(string $minHeight)
    {
        $this->minHeight = $minHeight;
    }

    public function getClassName(): string
    {
        $classes = [
            '50' => 'min-h-[calc(50dvh-80px)] lg:!min-h-[calc(50dvh-86px)]',
            '80' => 'min-h-[calc(80dvh-80px)] lg:!min-h-[calc(80dvh-86px)]',
            '100' => 'min-h-[calc(100dvh-80px)] lg:!min-h-[calc(100dvh-86px)]',
        ];

        return $classes[$this->minHeight] ?? '';
    }
}
