<?php

namespace BackTo\DesignSystem\Foundations\Interaction;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class LinkColorHoverDecorator implements StyleDecorator
{
    private string $linkColorHover = '';

    public function __construct(string $linkColorHover)
    {
        if (is_array($linkColorHover)) {
            $linkColorHover = implode(' ', $linkColorHover);
        }

        $this->linkColorHover = $linkColorHover;
    }

    public function getClassName(): string
    {
        $linkColorHoverClasses = [
            'black' => 'hover:text-black',
            'white' => 'hover:text-white',
            'dark' => 'hover:text-dark',
            'light' => 'hover:text-light',
            'primary' => 'hover:text-primary',
            'secondary' => 'hover:text-secondary',
            'primary-light' => 'hover:text-primary-light',
            'secondary-light' => 'hover:text-secondary-light',
            'success' => 'hover:text-success',
            'success-light' => 'hover:text-success-light',
            'warning' => 'hover:text-warning',
            'warning-light' => 'hover:text-warning-light',
            'error' => 'hover:text-error',
            'error-light' => 'hover:text-error-light',
            'disabled' => 'hover:text-disabled',
            'disabled-light' => 'hover:text-disabled-light',
        ];

        $className = '';

        if (
            !empty($this->linkColorHover)
            && array_key_exists($this->linkColorHover, $linkColorHoverClasses)
        ) {
            $className = $linkColorHoverClasses[$this->linkColorHover];
        }

        return $className;
    }
}
