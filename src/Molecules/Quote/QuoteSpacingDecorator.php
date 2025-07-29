<?php

namespace BackTo\DesignSystem\Molecules\Quote;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class QuoteSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_+_&]:mt-m';
        $className[] = '[&_+_*]:mt-m';
        $className[] = '[&_+_*]:md:mt-l';
        $className[] = '[*_+_&]:mt-m';
        $className[] = '[*_+_&]:md:mt-l';

        return join(' ', $className);
    }
}
