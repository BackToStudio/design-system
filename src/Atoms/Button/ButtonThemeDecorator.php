<?php

namespace BackTo\DesignSystem\Atoms\Button;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ButtonThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'text-light-title font-bold';
    }
}
