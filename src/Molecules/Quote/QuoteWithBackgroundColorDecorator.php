<?php

namespace BackTo\DesignSystem\Molecules\Quote;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class QuoteWithBackgroundColorDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = 'relative rounded-md';
        $classNames[] = 'py-m px-m';

        return join(' ', $classNames);
    }
}
