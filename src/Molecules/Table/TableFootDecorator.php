<?php

namespace PlusQuePro\DesignSystem\Molecules\Table;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class TableFootDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = 'bg-deep-10 text-h6 font-semibold border-t border-deep-800';
        $classNames[] = '[&_td]:p-xs [&_tr]:grid';
        $classNames[] = '[&_tr]:md:table-row [&_tr]:grid-rows-1';
        $classNames[] = '[&_tr]:grid-cols-3 [&_tr]:w-full';
        $classNames[] = '[&_tr_>_td:first-child]:hidden [&_tr_>_td:first-child]:md:block';

        return join(' ', $classNames);
    }
}
