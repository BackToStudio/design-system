<?php

namespace BackTo\DesignSystem\Foundations\Typography;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class TextTransformDecorator implements StyleDecorator
{
    private string $textTransform = '';

    public function __construct(string $textTransform)
    {
        $this->textTransform = $textTransform;
    }

    public function getClassName(): string
    {
        $textTransformClasses = [
            'uppercase' => 'uppercase',
            'lowercase' => 'lowercase',
            'capitalize' => 'capitalize',
        ];

        $className = '';

        if (
            !empty($this->textTransform)
            && array_key_exists($this->textTransform, $textTransformClasses)
        ) {
            $className = $textTransformClasses[$this->textTransform];
        }

        return $className;
    }
}
