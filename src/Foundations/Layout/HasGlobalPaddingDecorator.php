<?php

namespace BackTo\DesignSystem\Foundations\Layout;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class HasGlobalPaddingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'has-global-padding px-global-padding [&_.alignfull]:-mx-global-padding [&_.alignfull]:w-auto';
    }
}
