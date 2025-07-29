<?php

namespace BackTo\DesignSystem\Foundations\Effect;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ShadowDecorator implements StyleDecorator
{
    private string $shadow = '';

    public function __construct(string $shadow)
    {
        $this->shadow = $shadow;
    }

    public function getClassName(): string
    {
        $shadowClasses = [
            'var:preset|shadow|light' => 'shadow shadow-light',
            'var:preset|shadow|medium' => 'shadow shadow-medium',
            'var:preset|shadow|dark' => 'shadow shadow-dark',
        ];

        if (
            empty($this->shadow)
            || !array_key_exists($this->shadow, $shadowClasses)
        ) {
            throw new \Exception('Invalid shadow value');
        }

        return $shadowClasses[$this->shadow];
    }
}
