<?php

namespace PlusQuePro\DesignSystem\Atoms\PostTerms;

use PlusQuePro\DesignSystem\StyleDecorator;

class PostTermsDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'flex flex-wrap gap-2xs';
    }
}
