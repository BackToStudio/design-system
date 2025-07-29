<?php

namespace BackTo\DesignSystem\Atoms\Heading;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class HeadingThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'text-balance';
    }
}
