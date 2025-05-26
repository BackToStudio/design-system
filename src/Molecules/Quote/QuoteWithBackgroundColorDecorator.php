<?php

namespace PlusQuePro\DesignSystem\Molecules\Quote;

use PlusQuePro\DesignSystem\StyleDecorator;

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
