<?php

namespace PlusQuePro\DesignSystem\Foundations\Effect;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class BorderRadiusTopLeftDecorator implements StyleDecorator
{
    private string $borderRadius = '';
    public function __construct(string $borderRadius)
    {
        $this->borderRadius = $borderRadius;
    }

    public function getClassName(): string
    {
        $borderRadiusClasses = [
            'none' => 'rounded-tl-none',
            'small' => 'rounded-tl-sm',
            'medium' => 'rounded-tl-md',
            'large' => 'rounded-tl-lg',
            'full' => 'rounded-tl-full',
            'xl' => 'rounded-tl-xl',
            '4px' => 'rounded-tl-xs',
            '8px' => 'rounded-tl-sm',
            '16px' => 'rounded-tl-md',
            '24px' => 'rounded-tl-lg',
            '32px' => 'rounded-tl-xl',
            'media' => 'rounded-tl-media',
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
