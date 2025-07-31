<?php

namespace BackTo\DesignSystem\Molecules\Table;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class TableFootDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = 'bg-disabled-light text-h6 font-semibold border-t border-disabled';
        $classNames[] = '[&_td]:p-xs [&_tr]:grid';
        $classNames[] = '[&_tr]:md:table-row [&_tr]:grid-rows-1';
        $classNames[] = '[&_tr]:grid-cols-3 [&_tr]:w-full';
        $classNames[] = '[&_tr_>_td:first-child]:hidden [&_tr_>_td:first-child]:md:block';

        return join(' ', $classNames);
    }
}
