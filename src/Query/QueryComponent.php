<?php

namespace PlusQuePro\DesignSystem\Query;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class QueryComponent extends TokenComponentWithChildren
{
	public function getMarkup(): string
	{
		$this->addClass('wp-block-query');

		return parent::getMarkup();
	}
}
