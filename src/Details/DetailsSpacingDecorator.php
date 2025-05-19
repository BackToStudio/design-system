<?php

namespace PlusQuePro\DesignSystem\Details;

use PlusQuePro\DesignSystem\StyleDecorator;

class DetailsSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[&_+_&]:mt-m [&_+_*]:mt-m [&_+_*]:md:mt-l [*_+_&]:mt-m [*_+_&]:md:mt-l';
    }
}
