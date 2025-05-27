<?php

namespace PlusQuePro\DesignSystem\Molecules\NavigationLink;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Atoms\Link\LinkComponent;
use PlusQuePro\DesignSystem\Atoms\Buttons\ButtonsComponent;
use PlusQuePro\DesignSystem\Molecules\MoleculeInterface;

class NavigationLinkCompoundComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    /**
     * @var LinkComponent|ButtonsComponent
     */
    private $link;

    /**
     * @var LinkComponent|ButtonsComponent
     */
    private $clickableComponent;

    public function __construct()
    {
        $this->clickableComponent = new LinkComponent();
    }

    /**
     * @return LinkComponent|ButtonsComponent
     */
    public function getClickableComponent()
    {
        return $this->clickableComponent;
    }

    /**
     * @var LinkComponent|ButtonsComponent $component
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
