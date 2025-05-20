<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

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
            'var:preset|color|white' => 'hover:text-white',
            'var:preset|color|primary-950' => 'hover:text-primary-950',
            'var:preset|color|primary-900' => 'hover:text-primary-900',
            'var:preset|color|primary-800' => 'hover:text-primary-800',
            'var:preset|color|primary-700' => 'hover:text-primary-700',
            'var:preset|color|primary-600' => 'hover:text-primary-600',
            'var:preset|color|primary-500' => 'hover:text-primary-500',
            'var:preset|color|primary-400' => 'hover:text-primary-400',
            'var:preset|color|primary-300' => 'hover:text-primary-300',
            'var:preset|color|primary-200' => 'hover:text-primary-200',
            'var:preset|color|primary-100' => 'hover:text-primary-100',
            'var:preset|color|primary-50' => 'hover:text-primary-50',
            'var:preset|color|secondary-600' => 'hover:text-secondary-600',
            'var:preset|color|secondary-500' => 'hover:text-secondary-500',
            'var:preset|color|secondary-400' => 'hover:text-secondary-400',
            'var:preset|color|secondary-300' => 'hover:text-secondary-300',
            'var:preset|color|secondary-200' => 'hover:text-secondary-200',
            'var:preset|color|secondary-100' => 'hover:text-secondary-100',
            'var:preset|color|secondary-50' => 'hover:text-secondary-50',
            'var:preset|color|secondary-10' => 'hover:text-secondary-10',
            'var:preset|color|deep-900' => 'hover:text-deep-900',
            'var:preset|color|deep-800' => 'hover:text-deep-800',
            'var:preset|color|deep-700' => 'hover:text-deep-700',
            'var:preset|color|deep-600' => 'hover:text-deep-600',
            'var:preset|color|deep-500' => 'hover:text-deep-500',
            'var:preset|color|deep-400' => 'hover:text-deep-400',
            'var:preset|color|deep-300' => 'hover:text-deep-300',
            'var:preset|color|deep-100' => 'hover:text-deep-100',
            'var:preset|color|deep-50' => 'hover:text-deep-50',
            'var:preset|color|deep-10' => 'hover:text-deep-10',
            'var:preset|color|green-700' => 'hover:text-green-700',
            'var:preset|color|green-600' => 'hover:text-green-600',
            'var:preset|color|green-500' => 'hover:text-green-500',
            'var:preset|color|green-100' => 'hover:text-green-100',
            'var:preset|color|green-50' => 'hover:text-green-50',
            'var:preset|color|yellow-800' => 'hover:text-yellow-800',
            'var:preset|color|yellow-700' => 'hover:text-yellow-700',
            'var:preset|color|yellow-500' => 'hover:text-yellow-500',
            'var:preset|color|yellow-100' => 'hover:text-yellow-100',
            'var:preset|color|yellow-50' => 'hover:text-yellow-50',
            'var:preset|color|red-700' => 'hover:text-red-700',
            'var:preset|color|red-600' => 'hover:text-red-600',
            'var:preset|color|red-500' => 'hover:text-red-500',
            'var:preset|color|red-400' => 'hover:text-red-400',
            'var:preset|color|red-100' => 'hover:text-red-100',
            'var:preset|color|red-50' => 'hover:text-red-50',
        ];

        $className = '';

        if (
            !empty($this->linkColorHover) &&
            array_key_exists($this->linkColorHover, $linkColorHoverClasses)
        ) {
            $className = $linkColorHoverClasses[$this->linkColorHover];
        }

        return $className;
    }
}
