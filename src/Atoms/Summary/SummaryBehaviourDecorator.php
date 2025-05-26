<?php

namespace PlusQuePro\DesignSystem\Atoms\Summary;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class SummaryBehaviourDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = ' relative cursor-pointer rounded-lg';

        $classNames .= ' marker:content-none marker:hidden';

        $classNames .= ' flex items-center';

        $classNames .= ' [&_svg]:origin-center [&_svg]:rotate-[0deg] [&_svg]:transition-transform';

        $classNames .= ' [&_svg]:duration-300 [&_svg]:ease-in-out';

        return $classNames;
    }
}
