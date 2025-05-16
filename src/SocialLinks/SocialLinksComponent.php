<?php

namespace PlusQuePro\DesignSystem\SocialLinks;

use PlusQuePro\DesignSystem\TokenComponent;

class SocialLinksComponent extends TokenComponent
{
	public function getMarkup(): string
	{
		$this->setTagName('ul');
		$this->addClass('wp-block-social-links');

		return parent::getMarkup();
	}
}
