<?php

namespace BackTo\DesignSystem\Atoms\Link;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class LinkDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = '[&_a]:underline [&_a]:underline-offset-2';

        return join(' ', $classNames);
    }
}
