<?php

namespace BackTo\DesignSystem\Foundations\Interaction;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ExcerptButtonDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classes = '-ml-s';

        $classes .= ' before:before-hover';

        $classes .= ' !gap-2xs !underline-offset-2';

        return $classes;
    }
}
