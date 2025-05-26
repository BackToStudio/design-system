<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

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
