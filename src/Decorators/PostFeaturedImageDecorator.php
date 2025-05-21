<?php

namespace PQP\Decorators;

class PostFeaturedImageDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_img]:w-full';
        $className[] = '[&_img]:rounded-media';
        $className[] = '[&_img]:object-cover';

        return join(' ', $className);
    }
}
