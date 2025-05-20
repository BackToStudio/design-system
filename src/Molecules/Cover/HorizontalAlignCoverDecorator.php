<?php

namespace PlusQuePro\DesignSystem\Cover;

use PlusQuePro\DesignSystem\StyleDecorator;

class HorizontalAlignCoverDecorator implements StyleDecorator
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
            'center' => 'justify-center',
            'right' => 'justify-end',
            'space-between' => 'justify-between',
        ];

        return $flexContentClasses[$this->contentJustify] ?? '';
    }
}
