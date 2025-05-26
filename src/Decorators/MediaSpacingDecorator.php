<?php

namespace PQP\Decorators;

class MediaSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[*_+_&]:mt-l [*_+_&]:md:mt-xl [*_+_&]:lg:mt-2xl [&_+_*]:mt-l [&_+_*]:md:mt-xl [&_+_*]:lg:mt-2xl';
    }
}
