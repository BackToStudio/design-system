<?php

namespace PlusQuePro\DesignSystem\Embed;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class EmbedCompoundComponent extends TokenComponentWithChildren
{
	private TokenComponentWithChildren $figcaptionComponent;

	public function __construct()
	{
		$this->figcaptionComponent = new TokenComponentWithChildren();
	}

	public function getFigcaptionComponent(): TokenComponentWithChildren
	{
		return $this->figcaptionComponent;
	}

	public function getMarkup(): string
	{
		$this->setTagName('figure');
		$this->addClass('wp-block-embed');
		$this->addClass('relative');

		$this->figcaptionComponent->setTagName('figcaption');

		$this->addChild($this->figcaptionComponent->getMarkup());
		return parent::getMarkup();
	}
}
