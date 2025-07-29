<?php

namespace BackTo\DesignSystem\Foundations\Interaction;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class FocusLinkDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_a:focus-visible]:outline-none [&_a:focus]:outline-none';
        $className[] = '[&_a:focus-visible]:ring-2 [&_a:focus-visible]:ring-offset-2';
        $className[] = '[&_a:focus-visible]:ring-secondary-500 [&_a:focus-visible]:rounded-full';

        return join(' ', $className);
    }
}
