<?php

namespace PlusQuePro\DesignSystem\NavigationLink;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Link\LinkComponent;
use PlusQuePro\DesignSystem\Button\ButtonComponent;

class NavigationLinkCompoundComponent extends TokenComponentWithChildren
{
    /** @var LinkComponent|ButtonComponent */
    private $link;

    /** @var LinkComponent|ButtonComponent */
    private $clickableComponent;

    public function __construct()
    {
        $this->clickableComponent = new LinkComponent();
    }

    /**
     * @return LinkComponent|ButtonComponent
     */
    public function getClickableComponent()
    {
        return $this->clickableComponent;
    }

    /**
     * @var LinkComponent|ButtonComponent $component
     */
    public function setClickableComponent($component): self
    {
        $this->clickableComponent = $component;

        return $this;
    }

    public function getMarkup(): string
    {
        $this->setTagName('li');
        $this->addClass('wp-block-navigation-item');

        $this->addChild($this->getClickableComponent()->getMarkup());

        return parent::getMarkup();
    }
}
