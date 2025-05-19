<?php

namespace PlusQuePro\DesignSystem\Heading;

use PlusQuePro\DesignSystem\TokenComponent;

class HeadingComponent extends TokenComponent
{
	private int $level = 2;

	public function getLevel(): int
	{
		return $this->level;
	}

	public function setLevel(int $level): static
	{
		$this->level = $level;

		return $this;
	}

	public function getMarkup(): string
	{
		$this->setTagName('h' . $this->getLevel());
		$this->addClass('wp-block-heading');

		return parent::getMarkup();
	}
}
