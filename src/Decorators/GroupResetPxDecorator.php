<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class GroupResetPxDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[&_>_&]:px-0';
    }
}
