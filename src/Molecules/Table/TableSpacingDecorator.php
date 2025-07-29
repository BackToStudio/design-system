<?php

namespace BackTo\DesignSystem\Molecules\Table;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class TableSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[&_+_&]:mt-m [&_+_*]:mt-m [&_+_*]:md:mt-l [*_+_&]:mt-m [*_+_&]:md:mt-l';
    }
}
