<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

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
            'var:preset|color|black' => 'text-black',
            'var:preset|color|white' => 'text-white',
            'var:preset|color|dark' => 'text-dark',
            'var:preset|color|light' => 'text-light',
            'var:preset|color|primary' => 'text-primary',
            'var:preset|color|secondary' => 'text-secondary',
            'var:preset|color|primary-light' => 'text-primary-light',
            'var:preset|color|secondary-light' => 'text-secondary-light',
            'var:preset|color|success' => 'text-success',
            'var:preset|color|success-light' => 'text-success-light',
            'var:preset|color|warning' => 'text-warning',
            'var:preset|color|warning-light' => 'text-warning-light',
            'var:preset|color|error' => 'text-error',
            'var:preset|color|error-light' => 'text-error-light',
            'var:preset|color|disabled' => 'text-disabled',
            'var:preset|color|disabled-light' => 'text-disabled-light',
        ];

        $className = '';

        if (
            !empty($this->linkColor)
            && array_key_exists($this->linkColor, $linkColorClasses)
        ) {
            $className = $linkColorClasses[$this->linkColor];
            $className .= ' has-link-color';
        }

        return $className;
    }
}
