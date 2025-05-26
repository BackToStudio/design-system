<?php

namespace PlusQuePro\DesignSystem\Molecules\NavigationSubmenu;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponent;
use PlusQuePro\DesignSystem\Molecules\MoleculeInterface;
use PlusQuePro\DesignSystem\Atoms\List\ListComponent;
use PlusQuePro\DesignSystem\Atoms\Button\ButtonComponent;

class NavigationSubmenuCompoundComponent extends TokenComponent implements MoleculeInterface
{
    private ListComponent $submenu;
    private ButtonComponent $button;

    public function __construct()
    {
        $this->submenu = new ListComponent();
        $this->button = new ButtonComponent();
    }

    public function getSubmenu(): ListComponent
    {
        return $this->submenu;
    }

    public function getButton(): ButtonComponent
    {
        return $this->button;
    }

    public function getMarkup(): string
    {
        $this->setTagName('li');
        $this->addClass('wp-block-navigation-item');

        $this->getButton()
            ->addClass('wp-block-navigation-submenu__toggle');

        $this->addChild($this->getButton()->getMarkup());

        if ($this->getSubmenu()->hasChildren()) {
            $this->getSubmenu()
                ->setTagName('ul')
                ->addClass('wp-block-navigation-submenu');

            $this->addChild($this->getSubmenu()->getMarkup());
        }

        return parent::getMarkup();
    }
}
