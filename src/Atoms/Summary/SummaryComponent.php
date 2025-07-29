<?php

namespace BackTo\DesignSystem\Atoms\Summary;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use BackTo\DesignSystem\Atoms\Icon\IconComponent;

class SummaryComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->setTagName('summary');
        $this->addClass('wp-block-details__summary');
        $this->addClass('cursor-pointer');

        $iconArrowDown = new IconComponent('arrow_bottom_details');
        $iconArrowDown->addAttribute('aria-label', 'Ouvrir le détail');

        $this->addChild($iconArrowDown->getMarkup());

        return parent::getMarkup();
    }
}
