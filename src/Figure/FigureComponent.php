<?php

namespace PlusQuePro\DesignSystem\Figure;

use PlusQuePro\DesignSystem\TokenComponent;

class FigureComponent extends TokenComponent
{
	public function getMarkup(): string
	{
		$this->setTagName('figure');

		return parent::getMarkup();
	}
}
