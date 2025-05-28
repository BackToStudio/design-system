<?php

namespace PlusQuePro\DesignSystem\Molecules\NavigationSubmenu;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponent;
use PlusQuePro\DesignSystem\Atoms\Button\ButtonComponent;
use PlusQuePro\DesignSystem\Atoms\List\ListComponent;

class NavigationSubmenuInteractor
{
	private TokenComponent $component;
	private ButtonComponent $button;
	private ListComponent $submenu;

	public function __construct(
		TokenComponent $component,
		ButtonComponent $button,
		ListComponent $submenu
	) {
		$this->component = $component;
		$this->button = $button;
		$this->submenu = $submenu;
	}

	public function applyInteractions(array $attrs): void
	{
		$this->component->addAttribute(
			'x-on:click.outside',
			'isSubmenuOpen = false'
		);

		$this->button
			->addAttribute('x-on:click', 'isSubmenuOpen = !isSubmenuOpen')
			->addAttribute('x-bind:aria-expanded', 'isSubmenuOpen')
			->addAttribute('x-ref', 'button')
			->addAttribute('type', 'button');

		$this->submenu
			->addAttribute('x-bind:aria-expanded', 'isSubmenuOpen')
			->addAttribute('x-cloak', '');
	}
}
