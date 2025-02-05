<?php

namespace PQP\DesignSystem\Decorators;

class ButtonThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'text-light-title font-bold';
    }
}
