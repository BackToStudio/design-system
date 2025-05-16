<?php

namespace PlusQuePro\DesignSystem\Figcaption;

use PlusQuePro\DesignSystem\TokenComponent;

class FigCaptionComponent extends TokenComponent
{
	private string $children = '';

	public function setChildren(string $children): self
	{
		$this->children = $children;
		return $this;
	}

	public function getMarkup(): string
	{
		$this->setTagName('figcaption');
		$this->addChild($this->children);

		return parent::getMarkup();
	}
}
