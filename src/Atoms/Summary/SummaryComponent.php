<?php

namespace PlusQuePro\DesignSystem\Atoms\Summary;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Atoms\Icon\IconComponent;

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
