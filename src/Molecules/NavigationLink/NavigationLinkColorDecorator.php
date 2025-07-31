<?php

namespace BackTo\DesignSystem\Molecules\NavigationLink;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class NavigationLinkColorDecorator implements StyleDecorator
{
    private string $linkColor = '';

    public function __construct(string $linkColor)
    {
        $this->linkColor = $linkColor;
    }

    public function getClassName(): string
    {
        $linkColorClasses = [
            'black' => '[&_a]:text-black',
            'white' => '[&_a]:text-white',
            'dark' => '[&_a]:text-dark',
            'light' => '[&_a]:text-light',
            'primary' => '[&_a]:text-primary',
            'secondary' => '[&_a]:text-secondary',
            'primary-light' => '[&_a]:text-primary-light',
            'secondary-light' => '[&_a]:text-secondary-light',
            'success' => '[&_a]:text-success',
            'success-light' => '[&_a]:text-success-light',
            'warning' => '[&_a]:text-warning',
            'warning-light' => '[&_a]:text-warning-light',
            'error' => '[&_a]:text-error',
            'error-light' => '[&_a]:text-error-light',
            'disabled' => '[&_a]:text-disabled',
            'disabled-light' => '[&_a]:text-disabled-light',
        ];

        $className = '';

        if (
            !empty($this->linkColor)
            && array_key_exists($this->linkColor, $linkColorClasses)
        ) {
            $className = $linkColorClasses[$this->linkColor];
            $className .= ' has-text-color';
        }

        return $className;
    }
}
