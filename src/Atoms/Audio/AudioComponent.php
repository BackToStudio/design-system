<?php

namespace BackTo\DesignSystem\Atoms\Audio;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class AudioComponent extends TokenComponentWithChildren
{
    private string $src = '';
    private bool $autoplay = false;
    private bool $loop = false;

    public function getSrc(): string
    {
        return $this->src;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;
        return $this;
    }

    public function isAutoplay(): bool
    {
        return $this->autoplay;
    }

    public function setAutoplay(bool $autoplay): self
    {
        $this->autoplay = $autoplay;
        return $this;
    }

    public function isLoop(): bool
    {
        return $this->loop;
    }

    public function setLoop(bool $loop): self
    {
        $this->loop = $loop;
        return $this;
    }

    public function getMarkup(): string
    {
        $this->setTagName('audio');

        if (empty($this->getSrc())) {
            return '';
        }

        $this->addAttribute('src', $this->getSrc());
        $this->addAttribute('controls', '');

        if ($this->isAutoplay()) {
            $this->addAttribute('autoplay', '');
        }

        if ($this->isLoop()) {
            $this->addAttribute('loop', '');
        }

        return parent::getMarkup();
    }
}
