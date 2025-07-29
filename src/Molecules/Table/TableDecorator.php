<?php

namespace BackTo\DesignSystem\Molecules\Table;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class TableDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = 'w-full border-spacing-2 [&_th]:p-xs';
        $classNames[] = '[&_th:first-child]:text-left';
        $classNames[] = '[&_td:first-child]:md:text-left';
        $classNames[] = '[&_td]:text-center';

        return join(' ', $classNames);
    }
}
