<?php

namespace PlusQuePro\DesignSystem\Gallery;

use PlusQuePro\DesignSystem\TokenComponent;
use PlusQuePro\DesignSystem\Figcaption\FigcaptionComponent;
use PlusQuePro\DesignSystem\Image\ImageCompoundComponent;

class GalleryCompoundComponent extends TokenComponent
{
	private array $images = [];

	private FigcaptionComponent $figCaption;

	public function __construct()
	{
		$this->figCaption = new FigcaptionComponent();
	}

	public function getImages(): array
	{
		return $this->images;
	}

	public function addImage(ImageCompoundComponent $image): self
	{
		$this->images[] = $image;
		return $this;
	}

	public function getFigcaptionComponent(): FigcaptionComponent
	{
		return $this->figCaption;
	}

	public function getMarkup(): string
	{
		$this->setTagName('figure');

		foreach ($this->images as $image) {
			$this->addChild($image->getMarkup());
		}

		if (!empty($this->getFigcaptionComponent()->getChildren())) {
			$this->addChild($this->figCaption->getMarkup());
		}

		return parent::getMarkup();
	}
}
