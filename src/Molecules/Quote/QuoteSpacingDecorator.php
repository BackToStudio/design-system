<?php

namespace PlusQuePro\DesignSystem\Molecules\Quote;

use PlusQuePro\DesignSystem\StyleDecorator;

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
