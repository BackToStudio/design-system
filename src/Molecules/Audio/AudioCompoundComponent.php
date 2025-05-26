<?php

namespace PlusQuePro\DesignSystem\Molecules\Audio;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Atoms\Figcaption\FigcaptionComponent;
use PlusQuePro\DesignSystem\Atoms\Audio\AudioComponent;
use PlusQuePro\DesignSystem\Molecules\MoleculeInterface;

class AudioCompoundComponent extends TokenComponentWithChildren implements MoleculeInterface
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
