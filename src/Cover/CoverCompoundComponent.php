<?php

namespace PlusQuePro\DesignSystem\Cover;

use PlusQuePro\DesignSystem\TokenComponent;
use PlusQuePro\DesignSystem\HasBackgroundImage;
use PlusQuePro\DesignSystem\HasBackgroundRepeated;
use PlusQuePro\DesignSystem\HasBackgroundParallax;
use PlusQuePro\DesignSystem\HasOpacity;
use PlusQuePro\DesignSystem\Figure\FigureComponent;
use PlusQuePro\DesignSystem\Video\VideoComponent;
use PlusQuePro\DesignSystem\Image\ImageComponent;

class CoverCompoundComponent extends TokenComponent
{
	use HasBackgroundImage;
	use HasBackgroundRepeated;
	use HasBackgroundParallax;
	use HasOpacity;

	private string $backgroundType = 'default';

	private TokenComponent $backgroundDimContainer;
	private TokenComponent $innerContainer;
	private FigureComponent $imageContainer;
	private VideoComponent $videoComponent;
	private ImageComponent $imageComponent;

	public function __construct()
	{
		$this->backgroundDimContainer = new TokenComponent();
		$this->innerContainer = new TokenComponent();
		$this->imageContainer = new FigureComponent();
		$this->imageComponent = new ImageComponent();
		$this->videoComponent = new VideoComponent();
	}

	public function getBackgroundDimContainer(): TokenComponent
	{
		return $this->backgroundDimContainer;
	}

	public function getInnerContainer(): TokenComponent
	{
		return $this->innerContainer;
	}

	public function getImageContainer(): FigureComponent
	{
		return $this->imageContainer;
	}

	public function getVideoComponent(): VideoComponent
	{
		return $this->videoComponent;
	}

	public function getImageComponent(): ImageComponent
	{
		return $this->imageComponent;
	}

	public function setBackgroundType(string $backgroundType): static
	{
		$this->backgroundType = $backgroundType;
		return $this;
	}

	public function getBackgroundType(): string
	{
		return $this->backgroundType;
	}

	public function getMarkup(): string
	{
		$children = $this->getChildren();
		$this->clearChildren();

		$this->addClass('wp-block-cover relative');

		if ($this->isRepeated() && empty($this->hasParallax())) {
			$this->addClass('bg-auto bg-repeat');
			$this->getImageContainer()->addClass('bg-auto bg-repeat');
		}

		if ($this->hasParallax() && empty($this->isRepeated())) {
			$this->addClass('bg-cover bg-no-repeat bg-fixed');
			$this->getImageContainer()->addClass('bg-cover bg-no-repeat bg-fixed');
		}

		if ($this->isRepeated() && $this->hasParallax()) {
			$this->addClass('bg-auto bg-repeat bg-fixed');
			$this->getImageContainer()->addClass('bg-auto bg-repeat bg-fixed');
		}

		$this->getBackgroundDimContainer()->setTagName('span');
		$this->getBackgroundDimContainer()->addClass(
			'wp-block-cover__background has-background-color has-background-dim'
		);

		$this->addChild($this->getBackgroundDimContainer()->getMarkup());

		switch ($this->getBackgroundType()) {
			case 'video':
				$this->prepareVideoBackgroundMarkup();
				break;
			default:
				$this->prepareImageBackgroundMarkup();
				break;
		}

		if (!empty($children)) {
			$this->getInnerContainer()->addClass('wp-block-cover__inner-container');
			$this->getInnerContainer()->addClass('relative z-20');

			$innerContent = join(' ', $children);
			$this->getInnerContainer()->addChild($innerContent);
			$this->addChild($this->getInnerContainer()->getMarkup());
		}

		return parent::getMarkup();
	}

	private function prepareVideoBackgroundMarkup(): void
	{
		$this->getVideoComponent()->addClass(
			'wp-block-cover__video-background absolute inset-0 h-full w-full object-cover intrinsic-ignore'
		);
		$this->getVideoComponent()->addAttribute('data-object-fit', 'cover');
		$this->getVideoComponent()->setSrc($this->getBackgroundImage());
		$this->getVideoComponent()->setPlaysInline(true);
		$this->getVideoComponent()->setMuted(true);
		$this->getVideoComponent()->setLoop(true);
		$this->getVideoComponent()->setAutoplay(true);

		$this->addChild($this->getVideoComponent()->getMarkup());
	}

	private function prepareImageBackgroundMarkup(): void
	{
		if (!empty($this->getBackgroundImage())) {
			$this->getImageContainer()->addClass('wp-block-cover__image-background');
			$this->getImageComponent()->setSrc($this->getBackgroundImage());
			$this->getImageComponent()->addClass(
				'absolute inset-0 h-full w-full object-cover intrinsic-ignore'
			);

			$this->getImageContainer()->addChild(
				$this->getImageComponent()->getMarkup()
			);

			$this->addChild($this->getImageContainer()->getMarkup());
		}
	}
}
