<?php

namespace PQP\Components;

class EmbedCompoundComponent extends TokenComponent
{
	private TokenComponent $figCaptionComponent;

	public function __construct()
	{
		$this->figCaptionComponent = new TokenComponent();
	}

	public function getFigCaptionComponent(): TokenComponent
	{
		return $this->figCaptionComponent;
	}

	public function getMarkup(): string
	{
		$this->setTagName('figure');
		$this->addClass('wp-block-embed');
		$this->addClass('relative');

		$this->figCaptionComponent->setTagName('figcaption');

		$this->addChild($this->figCaptionComponent->getMarkup());
		return parent::getMarkup();
	}
}
