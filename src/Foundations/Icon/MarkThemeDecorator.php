<?php

namespace PlusQuePro\DesignSystem\Foundations\Icon;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;
use PlusQuePro\DesignSystem\Foundations\Effect\BorderRadiusDecorator;

class MarkThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = [];

        $decorator = new BorderRadiusDecorator('medium');
        $classNames[] = $decorator->getClassName();
        $classNames[] = 'px-4 py-2 inline-block my-2xs';

        return join(' ', $classNames);
    }
}
