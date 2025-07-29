<?php

namespace BackTo\DesignSystem\Foundations\Layout;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class HorizontalAlignDecorator implements StyleDecorator
{
    private string $contentJustify = '';

    public function __construct(string $contentJustify)
    {
        $this->contentJustify = $contentJustify;
    }

    public function getClassName(): string
    {
        $flexContentClasses = [
            'left' => 'justify-start',
            'center' => 'items-center justify-center',
            'right' => 'items-end justify-end',
            'space-between' => 'justify-between',
        ];

        return $flexContentClasses[$this->contentJustify] ?? '';
    }
}
