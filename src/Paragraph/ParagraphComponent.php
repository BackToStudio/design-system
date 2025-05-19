<?php

namespace PlusQuePro\DesignSystem\Paragraph;

use PlusQuePro\DesignSystem\TokenComponent;

class ParagraphComponent extends TokenComponent
{
	public function getMarkup(): string
	{
		$this->setTagName('p');

		return parent::getMarkup();
	}
}
