<?php

namespace PlusQuePro\DesignSystem\Atoms\Heading;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class HeadingThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'text-balance';
    }
}
