<?php

namespace PlusQuePro\DesignSystem\Decorators;

class ColumnsSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_+_&]:mt-l [*_+_&]:mt-l [*_+_&]:md:mt-xl [*_+_&]:lg:mt-2xl';
        $className[] = '[&_+_*]:mt-l [&_+_*]:md:mt-xl [&_+_*]:lg:mt-2xl';
        $className[] = '[.alignwide_>_&_+_*]:mt-m [.alignwide_>_&_+_*]:md:mt-l [.alignwide_>_&_+_*]:lg:mt-xl';
        $className[] = '[.aligndefault_>_&_+_*]:mt-s [.aligndefault_>_&_+_*]:md:mt-m [.aligndefault_>_&_+_*]:lg:mt-l';

        return join(' ', $className);
    }
}
