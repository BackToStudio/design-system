<?php

namespace PlusQuePro\DesignSystem\Atoms\Button;

use PlusQuePro\DesignSystem\Atoms\TokenComponent;

class ButtonComponent extends TokenComponent
{
	public function setType(string $type): void
	{
		$this->addAttribute('type', $type);
	}

	public function getMarkup(): string
	{
		$this->setTagName('button');

		return parent::getMarkup();
	}
}
