<?php

namespace PlusQuePro\DesignSystem\Molecules\Table;

use PlusQuePro\DesignSystem\StyleDecorator;

class TableHeadDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = 'bg-deep-10 text-h6 text-semibold border-b border-deep-800';
        $classNames[] = '[&_tr]:grid [&_tr]:md:table-row [&_tr]:grid-cols-3 [&_tr]:grid-rows-1 [&_tr]:w-full';
        $classNames[] = '[&_tr_>_th:first-child]:hidden [&_tr_>_th:first-child]:md:block';

        return implode(' ', $classNames);
    }
}
