<?php

namespace BackTo\DesignSystem\Foundations\Interaction;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ExcerptButtonDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '-ml-s';
        $className[] = 'before:before-hover';
        $className[] = '!gap-2xs !underline-offset-2';

        return join(' ', $className);
    }
}
