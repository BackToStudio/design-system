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
            'white' => '[&_a]:text-white',
            'primary-950' => '[&_a]:text-primary-950',
            'primary-900' => '[&_a]:text-primary-900',
            'primary-800' => '[&_a]:text-primary-800',
            'primary-700' => '[&_a]:text-primary-700',
            'primary-600' => '[&_a]:text-primary-600',
            'primary-500' => '[&_a]:text-primary-500',
            'primary-400' => 'text-primary-400',
            'primary-300' => '[&_a]:text-primary-300',
            'primary-200' => '[&_a]:text-primary-200',
            'primary-100' => '[&_a]:text-primary-100',
            'primary-50' => '[&_a]:text-primary-50',
            'secondary-600' => '[&_a]:text-secondary-600',
            'secondary-500' => '[&_a]:text-secondary-500',
            'secondary-400' => '[&_a]:text-secondary-400',
            'secondary-300' => '[&_a]:text-secondary-300',
            'secondary-200' => 'text-secondary-200',
            'secondary-100' => '[&_a]:text-secondary-100',
            'secondary-50' => '[&_a]:text-secondary-50',
            'secondary-10' => '[&_a]:text-secondary-10',
            'deep-900' => '[&_a]:text-deep-900',
            'deep-800' => '[&_a]:text-deep-800',
            'deep-700' => '[&_a]:text-deep-700',
            'deep-600' => '[&_a]:text-deep-600',
            'deep-500' => '[&_a]:text-deep-500',
            'deep-400' => '[&_a]:text-deep-400',
            'deep-300' => '[&_a]:text-deep-300',
            'deep-100' => '[&_a]:text-deep-100',
            'deep-50' => '[&_a]:text-deep-50',
            'deep-10' => '[&_a]:text-deep-10',
            'green-700' => '[&_a]:text-green-700',
            'green-600' => '[&_a]:text-green-600',
            'green-500' => '[&_a]:text-green-500',
            'green-100' => '[&_a]:text-green-100',
            'green-50' => '[&_a]:text-green-50',
            'yellow-800' => '[&_a]:text-yellow-800',
            'yellow-700' => '[&_a]:text-yellow-700',
            'yellow-500' => '[&_a]:text-yellow-500',
            'yellow-100' => '[&_a]:text-yellow-100',
            'yellow-50' => '[&_a]:text-yellow-50',
            'red-700' => '[&_a]:text-red-700',
            'red-600' => '[&_a]:text-red-600',
            'red-500' => '[&_a]:text-red-500',
            'red-400' => '[&_a]:text-red-400',
            'red-100' => '[&_a]:text-red-100',
            'red-50' => '[&_a]:text-red-50',
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
