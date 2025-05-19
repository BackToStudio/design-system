<?php

namespace PlusQuePro\DesignSystem\Cover;

use PlusQuePro\DesignSystem\StyleDecorator;

class GradientDecorator implements StyleDecorator
{
    private string $gradientValue;

    public function __construct(string $gradientValue)
    {
        $this->gradientValue = $gradientValue;
    }

    public function getClassName(): string
    {
        $gradientClasses = [
            'gradient-cover' =>
                'bg-gradient-to-r from-black from-30% md:from-[10%] to-transparent to-[120%] md:to-70%',
            'gradient-cover-full' =>
                'bg-gradient-to-r from-black from-20% md:from-[0%] to-transparent to-[120%] md:to-70%',
        ];

        $classNames = ['has-gradient'];

        if (array_key_exists($this->gradientValue, $gradientClasses)) {
            $classNames[] = $gradientClasses[$this->gradientValue];
        }

        return join(' ', $classNames);
    }
}
