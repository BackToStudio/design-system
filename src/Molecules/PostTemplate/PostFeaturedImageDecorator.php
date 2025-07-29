<?php

namespace BackTo\DesignSystem\Molecules\PostTemplate;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class PostFeaturedImageDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_img]:rounded-media';
        $className[] = '[&_img]:object-cover';

        return join(' ', $className);
    }
}
