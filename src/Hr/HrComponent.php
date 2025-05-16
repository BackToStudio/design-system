<?php

namespace PlusQuePro\DesignSystem\Hr;

use PlusQuePro\DesignSystem\TokenComponent;

class HrComponent extends TokenComponent
{
	public function getMarkup(): string
	{
		$this->setTagName('hr');
		$this->addClass('wp-block-separator');

		return parent::getMarkup();
	}
}
