<?php

namespace BackTo\DesignSystem\Foundations\Interaction;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ExcerptButtonDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classes = '-ml-6';

        $classes .= ' before:before-hover';

        $classes .= ' !gap-1 !underline-offset-2';

        return $classes;
    }
}
