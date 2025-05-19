<?php

namespace PlusQuePro\DesignSystem\PostTerms;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class PostTermsComponent extends TokenComponentWithChildren
{
	public function getMarkup(): string
	{
		$this->setTagName('div');
		$this->addClass('wp-block-post-terms');

		return parent::getMarkup();
	}
}
