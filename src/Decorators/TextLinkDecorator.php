<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class TextLinkDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = '[&_a]:underline [&_a]:underline-offset-2 [&_a]:text-secondary-500';

        return join(' ', $classNames);
    }
}
