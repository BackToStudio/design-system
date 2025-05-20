<?php

namespace PlusQuePro\DesignSystem\Molecules\Cover;

use PlusQuePro\DesignSystem\StyleDecorator;

class CoverInnerContainerDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'relative z-20';
    }
}
