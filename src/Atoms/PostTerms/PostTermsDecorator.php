<?php

namespace BackTo\DesignSystem\Atoms\PostTerms;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class PostTermsDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'flex flex-wrap gap-2xs';
    }
}
