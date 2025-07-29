<?php

namespace BackTo\DesignSystem\Foundations\Layout;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class GroupResetPxDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[&_>_&]:px-0';
    }
}
