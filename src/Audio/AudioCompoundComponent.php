<?php

namespace PlusQuePro\DesignSystem\Audio;

use PlusQuePro\DesignSystem\TokenComponent;
use PlusQuePro\DesignSystem\FigCaption\FigCaptionComponent;

class AudioCompoundComponent extends TokenComponent
{
	private AudioComponent $audio;
	private FigCaptionComponent $figCaption;

	public function __construct()
	{
		$this->audio = new AudioComponent();
		$this->figCaption = new FigCaptionComponent();

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

	public function getFigCaptionComponent(): FigCaptionComponent
	{
		return $this->figCaption;
	}

	public function setFigCaptionComponent(FigCaptionComponent $figCaption): self
	{
		$this->figCaption = $figCaption;
		return $this;
	}

	public function getMarkup(): string
	{
		if (empty($this->getAudioComponent()->getSrc())) {
			return '';
		}

		$this->addChild($this->getAudioComponent()->getMarkup());

		if (!empty($this->getFigCaptionComponent()->getChildren())) {
			$this->addChild($this->getFigCaptionComponent()->getMarkup());
		}

		return parent::getMarkup();
	}
}
