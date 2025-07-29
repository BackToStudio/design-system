<?php

namespace BackTo\DesignSystem\Atoms\List;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ListSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[*_+_&]:mt-xs [&_+_*]:mt-xs';
    }
}
