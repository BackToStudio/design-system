<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class TextColorDecorator implements StyleDecorator
{
    private string $textColor = '';

    public function __construct(string $textColor)
    {
        $this->textColor = $textColor;
    }

    public function getClassName(): string
    {
        $textColorClasses = [
            'white' => 'text-white',
            'primary-950' => 'text-primary-950',
            'primary-900' => 'text-primary-900',
            'primary-800' => 'text-primary-800',
            'primary-700' => 'text-primary-700',
            'primary-600' => 'text-primary-600',
            'primary-500' => 'text-primary-500',
            'primary-400' => 'text-primary-400',
            'primary-300' => 'text-primary-300',
            'primary-200' => 'text-primary-200',
            'primary-100' => 'text-primary-100',
            'primary-50' => 'text-primary-50',
            'secondary-600' => 'text-secondary-600',
            'secondary-500' => 'text-secondary-500',
            'secondary-400' => 'text-secondary-400',
            'secondary-300' => 'text-secondary-300',
            'secondary-200' => 'text-secondary-200',
            'secondary-100' => 'text-secondary-100',
            'secondary-50' => 'text-secondary-50',
            'secondary-10' => 'text-secondary-10',
            'deep-900' => 'text-deep-900',
            'deep-800' => 'text-deep-800',
            'deep-700' => 'text-deep-700',
            'deep-600' => 'text-deep-600',
            'deep-500' => 'text-deep-500',
            'deep-400' => 'text-deep-400',
            'deep-300' => 'text-deep-300',
            'deep-100' => 'text-deep-100',
            'deep-50' => 'text-deep-50',
            'deep-10' => 'text-deep-10',
            'green-700' => 'text-green-700',
            'green-600' => 'text-green-600',
            'green-500' => 'text-green-500',
            'green-100' => 'text-green-100',
            'green-50' => 'text-green-50',
            'yellow-800' => 'text-yellow-800',
            'yellow-700' => 'text-yellow-700',
            'yellow-500' => 'text-yellow-500',
            'yellow-100' => 'text-yellow-100',
            'yellow-50' => 'text-yellow-50',
            'red-700' => 'text-red-700',
            'red-600' => 'text-red-600',
            'red-500' => 'text-red-500',
            'red-400' => 'text-red-400',
            'red-100' => 'text-red-100',
            'red-50' => 'text-red-50',
            'foreground' => 'text-foreground',
            'background' => 'text-background',
        ];

        $className = '';

        if (
            !empty($this->textColor)
            && array_key_exists($this->textColor, $textColorClasses)
        ) {
            $className = $textColorClasses[$this->textColor];
            $className .= ' has-text-color';
        }

        return $className;
    }
}
