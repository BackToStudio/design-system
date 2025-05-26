<?php

namespace PlusQuePro\DesignSystem\Foundations\Layout;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class HorizontalStackDecorator implements StyleDecorator
{
    private string $contentJustify = '';

    public function __construct(string $contentJustify)
    {
        $this->contentJustify = $contentJustify;
    }

    public function getClassName(): string
    {
        $flexContentClasses = [
            'left' => 'items-start',
            'center' => 'items-center',
            'right' => 'items-end',
            'stretch' => 'items-stretch',
        ];

        $className = '';

        if (array_key_exists($this->contentJustify, $flexContentClasses)) {
            $className = $flexContentClasses[$this->contentJustify];
        }

        return $className;
    }
}
