<?php

namespace PlusQuePro\DesignSystem\Molecules\Details;

use PlusQuePro\DesignSystem\StyleDecorator;
use PlusQuePro\DesignSystem\Decorators\PaddingLeftDecorator;
use PlusQuePro\DesignSystem\Decorators\PaddingRightDecorator;
use PlusQuePro\DesignSystem\Decorators\PaddingBottomDecorator;

class DetailsContentDecorator implements StyleDecorator
{
    private PaddingLeftDecorator $paddingLeftDecorator;
    private PaddingRightDecorator $paddingRightDecorator;
    private PaddingBottomDecorator $paddingBottomDecorator;

    public function __construct()
    {
        $this->paddingLeftDecorator = new PaddingLeftDecorator(
            'var:preset|spacing|s'
        );
        $this->paddingRightDecorator = new PaddingRightDecorator(
            'var:preset|spacing|s'
        );
        $this->paddingBottomDecorator = new PaddingBottomDecorator(
            'var:preset|spacing|s'
        );
    }

    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = $this->paddingLeftDecorator->getClassName();
        $classNames[] = $this->paddingRightDecorator->getClassName();
        $classNames[] = $this->paddingBottomDecorator->getClassName();

        return implode(' ', $classNames);
    }
}
