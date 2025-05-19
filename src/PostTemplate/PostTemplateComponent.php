<?php

namespace PlusQuePro\DesignSystem\PostTemplate;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class PostTemplateComponent extends TokenComponentWithChildren
{
	public function getMarkup(): string
	{
		$this->setTagName('ul');
		$this->addClass('wp-block-post-template');

		return parent::getMarkup();
	}
}
