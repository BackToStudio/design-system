<?php

namespace PQP\DesignSystem\Components;

class ButtonIconComponent extends TokenComponent
{
	private string $iconClass = '';

	public function setIconClass(string $iconClass): void
	{
		$this->iconClass = $iconClass;
	}

	public function getIconClass(): string
	{
		return $this->iconClass;
	}

	public function getMarkup(): string
	{
		if (empty($this->iconClass)) {
			return '';
		}

		$this->setTagName('i');
		$this->addAttribute('class', $this->iconClass);

		return parent::getMarkup();
	}
}
