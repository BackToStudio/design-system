<?php

namespace BackTo\DesignSystem\Molecules\Table;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class TableBodyDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = '[&_tr]:border-b [&_tr]:border-deep-20';
        $classNames[] = '[&_td]:text-h4 [&_td]:font-bold';
        $classNames[] = '[&_tr_>_td:first-child]:text-body [&_tr_>_td:first-child]:font-semibold';
        $classNames[] = '[&_tr_>_td:first-child]:bg-deep-5 [&_tr_>_td:first-child]:md:bg-white';
        $classNames[] = '[&_td]:p-xs [&_td]:md:py-s [&_td:first-child]:p-xs [&_td:first-child]:md:py-s';
        $classNames[] = '[&_tr]:grid [&_tr]:md:table-row [&_tr]:grid-cols-3 [&_tr]:grid-rows-2 [&_tr]:w-full';
        $classNames[] = '[&_tr_>_td:first-child]:col-span-full';

        return join(' ', $classNames);
    }
}
