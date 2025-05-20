<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

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
