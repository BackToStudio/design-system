<?php

namespace BackTo\DesignSystem\Foundations\Effect;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BorderRadiusBottomLeftDecorator implements StyleDecorator
{
    private string $borderRadius = '';
    public function __construct(string $borderRadius)
    {
        $this->borderRadius = $borderRadius;
    }

    public function getClassName(): string
    {
        $borderRadiusClasses = [
            '4px' => 'rounded-bl-xs',
            '8px' => 'rounded-bl-sm',
            '16px' => 'rounded-bl-md',
            '24px' => 'rounded-bl-lg',
            '32px' => 'rounded-bl-xl',
            'media' => 'rounded-bl-media',
        ];

        $className = '';

        // Applique le rayon de bordure
        if (
            !empty($this->borderRadius)
            && array_key_exists($this->borderRadius, $borderRadiusClasses)
        ) {
            $className = $borderRadiusClasses[$this->borderRadius];
        }

        return $className;
    }
}
