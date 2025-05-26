<?php

namespace PlusQuePro\DesignSystem\Atoms\List;

use PlusQuePro\DesignSystem\StyleDecorator;

class ListThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'pl-6 [&_.is-style-check]:marker:content-none';
    }
}
