<?php

namespace PlusQuePro\DesignSystem\Embed;

use PlusQuePro\DesignSystem\TokenComponent;

class EmbedCompoundComponent extends TokenComponent
{
	private TokenComponent $figcaptionComponent;

	public function __construct()
	{
		$this->figcaptionComponent = new TokenComponent();
	}

	public function getFigcaptionComponent(): TokenComponent
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
