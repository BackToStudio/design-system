<?php

namespace PlusQuePro\DesignSystem\Audio;

use PlusQuePro\DesignSystem\TokenComponent;
use PlusQuePro\DesignSystem\Figcaption\FigcaptionComponent;

class AudioCompoundComponent extends TokenComponent
{
	private AudioComponent $audio;
	private FigcaptionComponent $figCaption;

	public function __construct()
	{
		$this->audio = new AudioComponent();
		$this->figCaption = new FigcaptionComponent();

		$this->setTagName('figure');
	}

	public function getAudioComponent(): AudioComponent
	{
		return $this->audio;
	}

	public function setAudioComponent(AudioComponent $audio): self
	{
		$this->audio = $audio;
		return $this;
	}

	public function getFigcaptionComponent(): FigcaptionComponent
	{
		return $this->figcaption;
	}

	public function setFigcaptionComponent(FigcaptionComponent $figcaption): self
	{
		$this->figcaption = $figcaption;
		return $this;
	}

	public function getMarkup(): string
	{
		if (empty($this->getAudioComponent()->getSrc())) {
			return '';
		}

		$this->addChild($this->getAudioComponent()->getMarkup());

		if (!empty($this->getFigcaptionComponent()->getChildren())) {
			$this->addChild($this->getFigcaptionComponent()->getMarkup());
		}

		return parent::getMarkup();
	}
}
