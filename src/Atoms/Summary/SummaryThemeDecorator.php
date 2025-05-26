<?php

namespace PlusQuePro\DesignSystem\Summary;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;
use PlusQuePro\DesignSystem\Decorators\BlockGapDecorator;
use PlusQuePro\DesignSystem\Decorators\TextFontSizeDecorator;
use PlusQuePro\DesignSystem\Decorators\FontWeightDecorator;
use PlusQuePro\DesignSystem\Decorators\PaddingTopDecorator;
use PlusQuePro\DesignSystem\Decorators\PaddingBottomDecorator;
use PlusQuePro\DesignSystem\Decorators\PaddingLeftDecorator;
use PlusQuePro\DesignSystem\Decorators\PaddingRightDecorator;

class SummaryThemeDecorator implements StyleDecorator
{
    private BlockGapDecorator $blockGapDecorator;
    private TextFontSizeDecorator $textFontSizeDecorator;
    private FontWeightDecorator $fontWeightDecorator;
    private PaddingTopDecorator $paddingTopDecorator;
    private PaddingBottomDecorator $paddingBottomDecorator;
    private PaddingLeftDecorator $paddingLeftDecorator;
    private PaddingRightDecorator $paddingRightDecorator;

    public function __construct()
    {
        $this->blockGapDecorator = new BlockGapDecorator('var:preset|spacing|xs');
        $this->textFontSizeDecorator = new TextFontSizeDecorator('h5');
        $this->fontWeightDecorator = new FontWeightDecorator('700');
        $this->paddingTopDecorator = new PaddingTopDecorator(
            'var:preset|spacing|s'
        );
        $this->paddingBottomDecorator = new PaddingBottomDecorator(
            'var:preset|spacing|s'
        );
        $this->paddingLeftDecorator = new PaddingLeftDecorator(
            'var:preset|spacing|s'
        );
        $this->paddingRightDecorator = new PaddingRightDecorator(
            'var:preset|spacing|xl'
        );
    }

    public function getClassName(): string
    {
        $classNames = [];

        $classNames[] = $this->blockGapDecorator->getClassName();
        $classNames[] = $this->textFontSizeDecorator->getClassName();
        $classNames[] = $this->fontWeightDecorator->getClassName();
        $classNames[] = $this->paddingTopDecorator->getClassName();
        $classNames[] = $this->paddingBottomDecorator->getClassName();
        $classNames[] = $this->paddingLeftDecorator->getClassName();
        $classNames[] = $this->paddingRightDecorator->getClassName();

        return implode(' ', $classNames);
    }
}
