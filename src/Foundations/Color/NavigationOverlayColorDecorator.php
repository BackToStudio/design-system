<?php

namespace BackTo\DesignSystem\Foundations\Color;

use BackTo\DesignSystem\Atoms\StyleDecorator;

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
            'var:preset|color|black' => 'bg-black',
            'var:preset|color|white' => 'bg-white',
            'var:preset|color|dark' => 'bg-dark',
            'var:preset|color|light' => 'bg-light',
            'var:preset|color|primary' => 'bg-primary',
            'var:preset|color|secondary' => 'bg-secondary',
            'var:preset|color|primary-light' => 'bg-primary-light',
            'var:preset|color|secondary-light' => 'bg-secondary-light',
            'var:preset|color|success' => 'bg-success',
            'var:preset|color|success-light' => 'bg-success-light',
            'var:preset|color|warning' => 'bg-warning',
            'var:preset|color|warning-light' => 'bg-warning-light',
            'var:preset|color|error' => 'bg-error',
            'var:preset|color|error-light' => 'bg-error-light',
            'var:preset|color|disabled' => 'bg-disabled',
            'var:preset|color|disabled-light' => 'bg-disabled-light',
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
