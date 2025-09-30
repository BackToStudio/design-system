<?php

namespace BackTo\DesignSystem\Foundations\Interaction;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class FocusDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = 'focus-visible:outline-none focus-visible:rounded-full';
        $className[] = 'focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-secondary';

        return join(' ', $className);
    }
}
