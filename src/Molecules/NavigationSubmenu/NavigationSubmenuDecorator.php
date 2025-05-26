<?php

namespace PlusQuePro\DesignSystem\Molecules\NavigationSubmenu;

use PlusQuePro\DesignSystem\StyleDecorator;

class NavigationSubmenuDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];
        $classNames[] = 'text-primary-950 lg:text-white';
        $classNames[] = '[&_a]:w-full [&_a]:text-deep-800';

        return join(' ', $classNames);
    }
}
