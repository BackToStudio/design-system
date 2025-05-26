<?php

namespace PlusQuePro\DesignSystem\Foundations\Layout;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class GridChildDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[&_>_*]:w-full [&_>_*]:h-full [&_>_*]:!mt-0';
    }
}
