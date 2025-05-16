<?php

namespace PlusQuePro\DesignSystem\PostTerms;

use PlusQuePro\DesignSystem\TokenComponent;

class PostTermsComponent extends TokenComponent
{
	public function getMarkup(): string
	{
		$this->setTagName('div');
		$this->addClass('wp-block-post-terms');

		return parent::getMarkup();
	}
}
