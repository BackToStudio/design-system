<?php

namespace PlusQuePro\DesignSystem\Query;

use PlusQuePro\DesignSystem\TokenComponent;

class QueryComponent extends TokenComponent
{
	public function getMarkup(): string
	{
		$this->addClass('wp-block-query');

		return parent::getMarkup();
	}
}
