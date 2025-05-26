<?php

namespace PlusQuePro\DesignSystem\Atoms\Summary;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class SummaryIconDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return ' [&_svg]:absolute [&_svg]:h-6 [&_svg]:w-6 [&_svg]:right-s [&_svg]:top-1/2 [&_svg]:-translate-y-1/2';
    }
}
