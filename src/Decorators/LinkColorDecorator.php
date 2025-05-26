<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class LinkColorDecorator implements StyleDecorator
{
    private string $linkColor = '';

    public function __construct(string $linkColor)
    {
        if (is_array($linkColor)) {
            $linkColor = implode(' ', $linkColor);
        }

        $this->linkColor = $linkColor;
    }

    public function getClassName(): string
    {
        $linkColorClasses = [
            'var:preset|color|white' => 'text-white',
            'var:preset|color|primary-950' => 'text-primary-950',
            'var:preset|color|primary-900' => 'text-primary-900',
            'var:preset|color|primary-800' => 'text-primary-800',
            'var:preset|color|primary-700' => 'text-primary-700',
            'var:preset|color|primary-600' => 'text-primary-600',
            'var:preset|color|primary-500' => 'text-primary-500',
            'var:preset|color|primary-400' => 'text-primary-400',
            'var:preset|color|primary-300' => 'text-primary-300',
            'var:preset|color|primary-200' => 'text-primary-200',
            'var:preset|color|primary-100' => 'text-primary-100',
            'var:preset|color|primary-50' => 'text-primary-50',
            'var:preset|color|secondary-600' => 'text-secondary-600',
            'var:preset|color|secondary-500' => 'text-secondary-500',
            'var:preset|color|secondary-400' => 'text-secondary-400',
            'var:preset|color|secondary-300' => 'text-secondary-300',
            'var:preset|color|secondary-200' => 'text-secondary-200',
            'var:preset|color|secondary-100' => 'text-secondary-100',
            'var:preset|color|secondary-50' => 'text-secondary-50',
            'var:preset|color|secondary-10' => 'text-secondary-10',
            'var:preset|color|deep-900' => 'text-deep-900',
            'var:preset|color|deep-800' => 'text-deep-800',
            'var:preset|color|deep-700' => 'text-deep-700',
            'var:preset|color|deep-600' => 'text-deep-600',
            'var:preset|color|deep-500' => 'text-deep-500',
            'var:preset|color|deep-400' => 'text-deep-400',
            'var:preset|color|deep-300' => 'text-deep-300',
            'var:preset|color|deep-100' => 'text-deep-100',
            'var:preset|color|deep-50' => 'text-deep-50',
            'var:preset|color|deep-10' => 'text-deep-10',
            'var:preset|color|green-700' => 'text-green-700',
            'var:preset|color|green-600' => 'text-green-600',
            'var:preset|color|green-500' => 'text-green-500',
            'var:preset|color|green-100' => 'text-green-100',
            'var:preset|color|green-50' => 'text-green-50',
            'var:preset|color|yellow-800' => 'text-yellow-800',
            'var:preset|color|yellow-700' => 'text-yellow-700',
            'var:preset|color|yellow-500' => 'text-yellow-500',
            'var:preset|color|yellow-100' => 'text-yellow-100',
            'var:preset|color|yellow-50' => 'text-yellow-50',
            'var:preset|color|red-700' => 'text-red-700',
            'var:preset|color|red-600' => 'text-red-600',
            'var:preset|color|red-500' => 'text-red-500',
            'var:preset|color|red-400' => 'text-red-400',
            'var:preset|color|red-100' => 'text-red-100',
            'var:preset|color|red-50' => 'text-red-50',
        ];

        $className = '';

        if (
            !empty($this->linkColor) &&
            array_key_exists($this->linkColor, $linkColorClasses)
        ) {
            $className = $linkColorClasses[$this->linkColor];
            $className .= ' has-link-color';
        }

        return $className;
    }
}
