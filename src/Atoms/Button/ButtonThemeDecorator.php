<?php

namespace PlusQuePro\DesignSystem\Atoms\Button;

use PlusQuePro\DesignSystem\StyleDecorator;

class ButtonThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'text-light-title font-bold';
    }
}
