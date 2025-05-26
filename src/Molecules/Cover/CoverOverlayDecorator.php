<?php

namespace PlusQuePro\DesignSystem\Molecules\Cover;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class CoverOverlayDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'absolute w-full h-full z-10 inset-0';
    }
}
