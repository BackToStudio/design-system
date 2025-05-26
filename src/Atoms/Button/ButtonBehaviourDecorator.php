<?php

namespace PlusQuePro\DesignSystem\Atoms\Button;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class ButtonBehaviourDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'border-2 inline-flex items-center gap-2 py-3 px-6 rounded-full';
    }
}
