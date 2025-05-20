<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class GridChildDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[&_>_*]:w-full [&_>_*]:h-full [&_>_*]:!mt-0';
    }
}
