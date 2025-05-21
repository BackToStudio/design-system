<?php

namespace PlusQuePro\DesignSystem\Atoms\List;

use PlusQuePro\DesignSystem\StyleDecorator;

class ListSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[*_+_&]:mt-xs [&_+_*]:mt-xs';
    }
}
