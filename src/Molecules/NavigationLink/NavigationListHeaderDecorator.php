<?php

namespace BackTo\DesignSystem\Molecules\NavigationLink;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class NavigationListHeaderDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];
        $classNames[] =
            'fixed top-[80px] left-0 w-screen h-[calc(100dvh-80px)] min-h-[calc(100dvh-80px)]';
        $classNames[] =
            '[.admin-bar_&]:mt-[46px] z-[110]';
        $classNames[] =
            'lg:static lg:w-auto lg:h-auto lg:min-h-auto lg:transform-none';
        $classNames[] =
            '[.admin-bar_&]:lg:mt-0 lg:pointer-events-auto';
        $classNames[] =
            'pointer-events-none -translate-x-full transition-transform duration-300';
        $classNames[] =
            'aria-expanded:translate-x-0 aria-expanded:pointer-events-auto';
        $classNames[] =
            'before:content-[""] before:origin-top before:-scale-y-0 before:absolute before:inset-0';
        $classNames[] =
            'before:bg-white before:-z-[1] before:transition-transform before:duration-300';
        $classNames[] =
            'aria-expanded:before:scale-y-100 aria-expanded:opacity-100';
        $classNames[] =
            'overflow-y-scroll lg:overflow-hidden bg-white text-primary-950 lg:text-white lg:bg-transparent';

        return implode(' ', $classNames);
    }
}
