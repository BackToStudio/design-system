<?php

namespace BackTo\DesignSystem\Foundations\Typography;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class FontFamilyDecorator implements StyleDecorator
{
    private string $fontFamily = '';

    public function __construct(string $fontFamily)
    {
        $this->fontFamily = $fontFamily;
    }

    public function getClassName(): string
    {
        $fontFamilyClasses = [
            'inter' => 'font-inter',
        ];

        $className = '';

        if (
            !empty($this->fontFamily)
            && array_key_exists($this->fontFamily, $fontFamilyClasses)
        ) {
            $className = $fontFamilyClasses[$this->fontFamily];
        }

        return $className;
    }
}
