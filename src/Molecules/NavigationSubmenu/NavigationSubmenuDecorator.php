<?php

namespace BackTo\DesignSystem\Molecules\NavigationSubmenu;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class NavigationSubmenuDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];
        $classNames[] = 'text-primary lg:text-light';
        $classNames[] = '[&_a]:w-full [&_a]:text-disabled-light';

        return join(' ', $classNames);
    }
}
