<?php

namespace PlusQuePro\DesignSystem\Foundations\Color;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class TextLinkDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = '[&_a]:underline [&_a]:underline-offset-2 [&_a]:text-secondary-500';

        return join(' ', $classNames);
    }
}
