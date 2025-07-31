<?php

namespace BackTo\DesignSystem\Atoms\Button;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ButtonBehaviourDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'w-auto border-2 inline-flex items-center gap-2xs py-xs px-s rounded-full';
    }
}
