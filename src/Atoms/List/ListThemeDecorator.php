<?php

namespace BackTo\DesignSystem\Atoms\List;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ListThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'pl-6 [&_.is-style-check]:marker:content-none';
    }
}
