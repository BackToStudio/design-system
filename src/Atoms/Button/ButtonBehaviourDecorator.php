<?php

namespace PlusQuePro\DesignSystem\Button;

use PlusQuePro\DesignSystem\StyleDecorator;

class ButtonBehaviourDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'border-2 inline-flex items-center gap-2 py-3 px-6 rounded-full';
    }
}
