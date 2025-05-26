<?php

namespace PlusQuePro\DesignSystem\Foundations\Layout;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class FlexBasisDecorator implements StyleDecorator
{
    private string $basis = '';

    public function __construct(string $basis)
    {
        $this->basis = $basis;
    }

    public function getClassName(): string
    {
        $flexBasisClasses = [
            '25' => 'md:basis-1/4',
            '33.33' => 'md:basis-1/3',
            '50' => 'md:basis-1/2',
            '66.66' => 'md:basis-2/3',
            '75' => 'md:basis-3/4',
            '100' => 'md:basis-full',
        ];

        $classNames = [];

        if (array_key_exists($this->basis, $flexBasisClasses)) {
            $classNames[] = $flexBasisClasses[$this->basis];
        }

        return join(' ', $classNames);
    }
}
