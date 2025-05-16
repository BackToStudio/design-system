<?php

namespace PlusQuePro\DesignSystem\PostTemplate;

use PlusQuePro\DesignSystem\TokenComponent;

class PostTemplateComponent extends TokenComponent
{
	public function getMarkup(): string
	{
		$this->setTagName('ul');
		$this->addClass('wp-block-post-template');

		return parent::getMarkup();
	}
}
