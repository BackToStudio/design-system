<?php

namespace BackTo\DesignSystem\Atoms\Summary;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use BackTo\DesignSystem\Atoms\Icon\IconComponent;

class SummaryComponent extends TokenComponentWithChildren
{
    private string $iconName = 'arrow_bottom_details';

    public function setIconName(string $iconName): void
    {
        $this->iconName = $iconName;
    }

    public function getIconName(): string
    {
        return $this->iconName;
    }

    public function getMarkup(): string
    {
        $this->setTagName('summary');
        $this->addClass('wp-block-details__summary');
        $this->addClass('cursor-pointer');

        $iconArrowDown = new IconComponent($this->iconName);
        $iconArrowDown->addAttribute('aria-hidden', 'true');

        $this->addChild($iconArrowDown->getMarkup());

        return parent::getMarkup();
    }
}
