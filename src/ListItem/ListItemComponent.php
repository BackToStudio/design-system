<?php

namespace PlusQuePro\DesignSystem\ListItem;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class ListItemComponent extends TokenComponentWithChildren
{
	public function getMarkup(): string
	{
		$this->setTagName('li');

		// TODO: Vérifier si on peut supprimer cette partie
		$existingChildren = $this->getChildren();
		$this->clearChildren();

		foreach ($existingChildren as $child) {
			$this->addChild($child);
		}

		return parent::getMarkup();
	}
}
