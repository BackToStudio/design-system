<?php

namespace PlusQuePro\DesignSystem\Molecules\Details;

use PlusQuePro\DesignSystem\StyleDecorator;

class DetailsBehaviourDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = 'rounded-md pointer-events-auto text-foreground !p-0';

        $classNames .= ' [&_+_.alignfull]:rounded-none';

        $classNames .= ' [&_svg]:open:rotate-[180deg]';

        $classNames .= ' [&_[class*="wrapper"]_>_*]:max-w-full';

        return $classNames;
    }
}
