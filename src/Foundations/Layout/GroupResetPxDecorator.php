<?php

namespace PlusQuePro\DesignSystem\Foundations\Layout;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class GroupResetPxDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[&_>_&]:px-0';
    }
}
