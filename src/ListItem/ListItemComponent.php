<?php

namespace PlusQuePro\DesignSystem\ListItem;

use PlusQuePro\DesignSystem\TokenComponent;

class ListItemComponent extends TokenComponent
{
	public function getMarkup(): string
	{
		$this->setTagName('li');

		$existingChildren = $this->getChildren();
		$this->clearChildren();

		foreach ($existingChildren as $child) {
			$this->addChild($child);
		}

		return parent::getMarkup();
	}
}
