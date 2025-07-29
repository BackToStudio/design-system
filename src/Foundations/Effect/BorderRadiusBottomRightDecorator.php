<?php

namespace BackTo\DesignSystem\Foundations\Effect;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class BorderRadiusBottomRightDecorator implements StyleDecorator
{
    private string $borderRadius = '';
    public function __construct(string $borderRadius)
    {
        $this->borderRadius = $borderRadius;
    }

    public function getClassName(): string
    {
        $borderRadiusClasses = [
            'none' => 'rounded-br-none',
            'small' => 'rounded-br-sm',
            'medium' => 'rounded-br-md',
            'large' => 'rounded-br-lg',
            'full' => 'rounded-br-full',
            'xl' => 'rounded-br-xl',
            '4px' => 'rounded-br-xs',
            '8px' => 'rounded-br-sm',
            '16px' => 'rounded-br-md',
            '24px' => 'rounded-br-lg',
            '32px' => 'rounded-br-xl',
            'media' => 'rounded-br-media',
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
