<?php

namespace PlusQuePro\DesignSystem\Foundations\Color;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderColorDecorator implements StyleDecorator
{
    private string $borderColor = '';

    public function __construct(string $borderColor)
    {
        $this->borderColor = $borderColor;
    }

    public function getClassName(): string
    {
        $borderColorClasses = [
            'transparent' => 'border-transparent',
            'primary-950' => 'border-primary-950 text-white',
            'primary-900' => 'border-primary-900 text-white',
            'primary-800' => 'border-primary-800 text-white',
            'primary-700' => 'border-primary-700 text-white',
            'primary-600' => 'border-primary-600 text-white',
            'primary-500' => 'border-primary-500',
            'primary-400' => 'border-primary-400',
            'primary-300' => 'border-primary-300',
            'primary-200' => 'border-primary-200',
            'primary-100' => 'border-primary-100',
            'primary-50' => 'border-primary-50',
            'secondary-600' => 'border-secondary-600',
            'secondary-500' => 'border-secondary-500',
            'secondary-400' => 'border-secondary-400',
            'secondary-300' => 'border-secondary-300',
            'secondary-200' => 'bg-secondary-200',
            'secondary-100' => 'border-secondary-100',
            'secondary-50' => 'border-secondary-50',
            'secondary-10' => 'border-secondary-10',
            'deep-900' => 'border-deep-900',
            'deep-800' => 'border-deep-800',
            'deep-700' => 'border-deep-700',
            'deep-600' => 'border-deep-600',
            'deep-500' => 'border-deep-500',
            'deep-400' => 'border-deep-400',
            'deep-300' => 'border-deep-300',
            'deep-100' => 'border-deep-100',
            'deep-50' => 'border-deep-50',
            'deep-10' => 'border-deep-10 text-deep-800',
            'deep-05' => 'border-deep-05',
            'white' => 'border-white',
            'green-700' => 'border-green-700',
            'green-600' => 'border-green-600',
            'green-500' => 'border-green-500',
            'green-100' => 'border-green-100',
            'green-50' => 'border-green-50',
            'yellow-800' => 'border-yellow-800',
            'yellow-700' => 'border-yellow-700',
            'yellow-500' => 'border-yellow-500',
            'yellow-100' => 'border-yellow-100',
            'yellow-50' => 'border-yellow-50',
            'red-700' => 'border-red-700',
            'red-600' => 'border-red-600',
            'red-500' => 'border-red-500',
            'red-400' => 'border-red-400',
            'red-100' => 'border-red-100',
            'red-50' => 'border-red-50',
            'foreground' => 'border-foreground',
            'background' => 'border-background',
            'var:preset|color|white' => 'border-white',
            'var:preset|color|deep-10' => 'border-deep-10',
            'var:preset|color|primary-500' => 'border-primary-500',
            'var:preset|color|primary-950' => 'border-primary-950',
        ];

        $className = '';

        if (
            !empty($this->borderColor)
            && array_key_exists($this->borderColor, $borderColorClasses)
        ) {
            $className = $borderColorClasses[$this->borderColor];
        }

        return $className;
    }
}
