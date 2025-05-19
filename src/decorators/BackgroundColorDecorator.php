<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class BackgroundColorDecorator implements StyleDecorator
{
    private string $backgroundColor = '';

    public function __construct(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function getClassName(): string
    {
        $backgroundColorClasses = [
            'transparent' => 'bg-transparent',
            'primary-950' => 'bg-primary-950 text-white',
            'primary-900' => 'bg-primary-900 text-white',
            'primary-800' => 'bg-primary-800 text-white',
            'primary-700' => 'bg-primary-700 text-white',
            'primary-600' => 'bg-primary-600 text-white',
            'primary-500' => 'bg-primary-500 text-white',
            'primary-400' => 'bg-primary-400',
            'primary-300' => 'bg-primary-300',
            'primary-200' => 'bg-primary-200',
            'primary-100' => 'bg-primary-100',
            'primary-50' => 'bg-primary-50',
            'secondary-600' => 'bg-secondary-600',
            'secondary-500' => 'bg-secondary-500',
            'secondary-400' => 'bg-secondary-400',
            'secondary-300' => 'bg-secondary-300',
            'secondary-200' => 'bg-secondary-200',
            'secondary-100' => 'bg-secondary-100',
            'secondary-50' => 'bg-secondary-50',
            'secondary-10' => 'bg-secondary-10',
            'deep-900' => 'bg-deep-900',
            'deep-800' => 'bg-deep-800',
            'deep-700' => 'bg-deep-700',
            'deep-600' => 'bg-deep-600',
            'deep-500' => 'bg-deep-500',
            'deep-400' => 'bg-deep-400',
            'deep-300' => 'bg-deep-300',
            'deep-100' => 'bg-deep-100',
            'deep-50' => 'bg-deep-50',
            'deep-10' => 'bg-deep-10 text-deep-800',
            'deep-05' => 'bg-deep-05',
            'white' => 'bg-white',
            'green-700' => 'bg-green-700',
            'green-600' => 'bg-green-600',
            'green-500' => 'bg-green-500',
            'green-100' => 'bg-green-100',
            'green-50' => 'bg-green-50',
            'yellow-800' => 'bg-yellow-800',
            'yellow-700' => 'bg-yellow-700',
            'yellow-500' => 'bg-yellow-500',
            'yellow-100' => 'bg-yellow-100',
            'yellow-50' => 'bg-yellow-50',
            'red-700' => 'bg-red-700',
            'red-600' => 'bg-red-600',
            'red-500' => 'bg-red-500',
            'red-400' => 'bg-red-400',
            'red-100' => 'bg-red-100',
            'red-50' => 'bg-red-50',
            'foreground' => 'bg-foreground',
            'background' => 'bg-background',
        ];

        $className = '';

        if (
            !empty($this->backgroundColor) &&
            array_key_exists($this->backgroundColor, $backgroundColorClasses)
        ) {
            $className = $backgroundColorClasses[$this->backgroundColor];
            $className .= ' has-background-color';
            $className .= ' has-background';
        }

        return $className;
    }
}
