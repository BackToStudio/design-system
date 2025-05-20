<?php

namespace PlusQuePro\DesignSystem\Molecules\NavigationSubmenu;

use PlusQuePro\DesignSystem\Atoms\TokenComponent;
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

        $this->addClass('wp-block-navigation-item')->addAttribute(
            '@click.outside',
            'isSubmenuOpen = false'
        );

        $this->addClass('text-primary-950 lg:text-white');

        $this->getButton()
            ->addClass('wp-block-navigation-submenu__toggle')
            ->addAttribute('@click', 'isSubmenuOpen = !isSubmenuOpen')
            ->addAttribute(':aria-expanded', 'isSubmenuOpen')
            ->addAttribute('x-ref', 'button')
            ->addAttribute('type', 'button');

        $this->getButton()->addAttribute(
            'x-bind:class',
            'isSubmenuOpen ? "text-secondary-500 lg:text-primary-300 [&_svg]:rotate-180 [&_svg]:origin-center ' .
            '[&_svg]:transition-transform [&_svg]:duration-300 [&_svg]:ease-in-out" : "[&_svg]:rotate-0 ' .
            '[&_svg]:origin-center [&_svg]:transition-transform [&_svg]:duration-300 [&_svg]:ease-in-out"'
        );

        $this->addChild($this->getButton()->getMarkup());

        if ($this->getSubmenu()->hasChildren()) {
            $this->getSubmenu()
                ->setTagName('ul')
                ->addClass('wp-block-navigation-submenu')
                ->addAttribute(':aria-expanded', 'isSubmenuOpen')
                ->addAttribute('x-cloak', '');

            $this->getSubmenu()->addClass('[&_a]:w-full [&_a]:text-deep-800');
            $this->addChild($this->getSubmenu()->getMarkup());
        }

        return parent::getMarkup();
    }
}
