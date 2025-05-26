<?php

namespace PQP\Decorators;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class MediaSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[*_+_&]:mt-l [*_+_&]:md:mt-xl [*_+_&]:lg:mt-2xl [&_+_*]:mt-l [&_+_*]:md:mt-xl [&_+_*]:lg:mt-2xl';
    }
}
