<?php

namespace PlusQuePro\DesignSystem\Paragraph;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class ParagraphComponent extends TokenComponentWithChildren
{
	public function getMarkup(): string
	{
		$this->setTagName('p');

		return parent::getMarkup();
	}
}
