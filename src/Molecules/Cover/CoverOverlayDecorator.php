<?php

namespace BackTo\DesignSystem\Molecules\Cover;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class CoverOverlayDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'absolute w-full h-full z-10 inset-0';
    }
}
