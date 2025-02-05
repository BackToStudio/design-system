<?php

namespace PQP\DesignSystem\Decorators\Button;

use PQP\DesignSystem\Decorators\StyleDecorator;

class ButtonThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'text-light-title font-bold';
    }
}
