<?php

namespace PlusQuePro\DesignSystem\Atoms\List;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class ListBehaviourDecorator implements StyleDecorator
{
    private bool $isOrdered = false;

    public function __construct(bool $isOrdered = false)
    {
        $this->isOrdered = $isOrdered;
    }

    public function getClassName(): string
    {
        $classNames = ['flex', 'flex-wrap', 'flex-col'];
        $classNames[] = $this->isOrdered ? 'list-decimal' : 'list-disc';

        return implode(' ', $classNames);
    }
}
