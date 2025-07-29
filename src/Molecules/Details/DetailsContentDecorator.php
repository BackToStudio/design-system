<?php

namespace BackTo\DesignSystem\Molecules\Details;

use BackTo\DesignSystem\Atoms\StyleDecorator;
use BackTo\DesignSystem\Foundations\Spacing\PaddingLeftDecorator;
use BackTo\DesignSystem\Foundations\Spacing\PaddingRightDecorator;
use BackTo\DesignSystem\Foundations\Spacing\PaddingBottomDecorator;

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
