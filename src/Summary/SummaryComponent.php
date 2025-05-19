<?php

namespace PlusQuePro\DesignSystem\Summary;

use PlusQuePro\DesignSystem\TokenComponent;

class SummaryComponent extends TokenComponent
{
    public function getMarkup(): string
    {
        $this->setTagName('summary');
        $this->addClass('wp-block-details__summary');
        $this->addClass('cursor-pointer');

        //TODO: add iconComponent
        // $iconArrowDown = new IconComponent('arrow_bottom_details');
        // $iconArrowDown->addAttribute('aria-label', 'Ouvrir le détail');

        // $this->addChild($iconArrowDown->getMarkup());

        return parent::getMarkup();
    }
}
