<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class NavigationOverlayColorDecorator implements StyleDecorator
{
    private string $overlayColor = '';

    public function __construct(string $overlayColor)
    {
        $this->overlayColor = $overlayColor;
    }

    public function getClassName(): string
    {
        $overlayColorClasses = [
            'white' => '[&_a:hover]:text-white',
            'primary-950' => '[&_a:hover]:text-primary-950',
            'primary-900' => '[&_a:hover]:text-primary-900',
            'primary-800' => '[&_a:hover]:text-primary-800',
            'primary-700' => '[&_a:hover]:text-primary-700',
            'primary-600' => '[&_a:hover]:text-primary-600',
            'primary-500' => '[&_a:hover]:text-primary-500',
            'primary-400' => '[&_a:hover]:text-primary-400',
            'primary-300' => '[&_a:hover]:text-primary-300',
            'primary-200' => '[&_a:hover]:text-primary-200',
            'primary-100' => '[&_a:hover]:text-primary-100',
            'primary-50' => '[&_a:hover]:text-primary-50',
            'secondary-600' => '[&_a:hover]:text-secondary-600',
            'secondary-500' => '[&_a:hover]:text-secondary-500',
            'secondary-400' => '[&_a:hover]:text-secondary-400',
            'secondary-300' => '[&_a:hover]:text-secondary-300',
            'secondary-200' => '[&_a:hover]:text-secondary-200',
            'secondary-100' => '[&_a:hover]:text-secondary-100',
            'secondary-50' => '[&_a:hover]:text-secondary-50',
            'secondary-10' => '[&_a:hover]:text-secondary-10',
            'deep-900' => '[&_a:hover]:text-deep-900',
            'deep-800' => '[&_a:hover]:text-deep-800',
            'deep-700' => '[&_a:hover]:text-deep-700',
            'deep-600' => '[&_a:hover]:text-deep-600',
            'deep-500' => '[&_a:hover]:text-deep-500',
            'deep-400' => '[&_a:hover]:text-deep-400',
            'deep-300' => '[&_a:hover]:text-deep-300',
            'deep-100' => '[&_a:hover]:text-deep-100',
            'deep-50' => '[&_a:hover]:text-deep-50',
            'deep-10' => '[&_a:hover]:text-deep-10',
            'green-700' => '[&_a:hover]:text-green-700',
            'green-600' => '[&_a:hover]:text-green-600',
            'green-500' => '[&_a:hover]:text-green-500',
            'green-100' => '[&_a:hover]:text-green-100',
            'green-50' => '[&_a:hover]:text-green-50',
            'yellow-800' => '[&_a:hover]:text-yellow-800',
            'yellow-700' => '[&_a:hover]:text-yellow-700',
            'yellow-500' => '[&_a]:text-yellow-500',
            'yellow-100' => '[&_a:hover]:text-yellow-100',
            'yellow-50' => '[&_a:hover]:text-yellow-50',
            'red-700' => '[&_a:hover]:text-red-700',
            'red-600' => '[&_a:hover]:text-red-600',
            'red-500' => '[&_a:hover]:text-red-500',
            'red-400' => '[&_a:hover]:text-red-400',
            'red-100' => '[&_a:hover]:text-red-100',
            'red-50' => '[&_a:hover]:text-red-50',
        ];

        $className = '';

        if (
            !empty($this->overlayColor)
            && array_key_exists($this->overlayColor, $overlayColorClasses)
        ) {
            $className = $overlayColorClasses[$this->overlayColor];
        }

        return $className;
    }
}
