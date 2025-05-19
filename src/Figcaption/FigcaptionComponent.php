<?php

namespace PlusQuePro\DesignSystem\Figcaption;

use PlusQuePro\DesignSystem\TokenComponent;
use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class FigCaptionComponent extends TokenComponentWithChildren
{

	public function getMarkup(): string
	{
		$this->setTagName('figcaption');

		return parent::getMarkup();
	}
}
