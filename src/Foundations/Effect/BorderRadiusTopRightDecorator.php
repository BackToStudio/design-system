<?php

namespace PlusQuePro\DesignSystem\Foundations\Effect;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderRadiusTopRightDecorator implements StyleDecorator
{
    private string $borderRadius = '';
    public function __construct(string $borderRadius)
    {
        $this->borderRadius = $borderRadius;
    }

    public function getClassName(): string
    {
        $borderRadiusClasses = [
            'none' => 'rounded-tr-none',
            'small' => 'rounded-tr-sm',
            'medium' => 'rounded-tr-md',
            'large' => 'rounded-tr-lg',
            'full' => 'rounded-tr-full',
            'xl' => 'rounded-tr-xl',
            '4px' => 'rounded-tr-xs',
            '8px' => 'rounded-tr-sm',
            '16px' => 'rounded-tr-md',
            '24px' => 'rounded-tr-lg',
            '32px' => 'rounded-tr-xl',
            'media' => 'rounded-tr-media',
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
