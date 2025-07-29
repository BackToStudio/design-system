<?php

namespace BackTo\DesignSystem\Foundations\Icon;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class IconDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'p-0 w-11 h-11 flex rounded-full items-center justify-center aspect-square';
    }
}
