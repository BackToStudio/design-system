<?php

namespace BackTo\DesignSystem\Molecules\Cover;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class OpacityDecorator implements StyleDecorator
{
    private int $dimRatio;

    public function __construct(int $dimRatio)
    {
        $this->dimRatio = $dimRatio;
    }

    public function getClassName(): string
    {
        $arrays = [
            10 => 'opacity-10',
            20 => 'opacity-20',
            30 => 'opacity-30',
            40 => 'opacity-40',
            50 => 'opacity-50',
            60 => 'opacity-60',
            70 => 'opacity-70',
            80 => 'opacity-80',
            90 => 'opacity-90',
            100 => 'opacity-100',
        ];

        return $arrays[$this->dimRatio];
    }
}
