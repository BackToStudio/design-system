<?php

namespace BackTo\DesignSystem\Atoms\Video;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class VideoComponent extends TokenComponentWithChildren
{
    protected string $src = '';
    protected bool $playsInline = false;
    protected bool $muted = false;
    protected bool $loop = false;
    protected bool $autoplay = false;
    protected bool $controls = false;

    public function __construct()
    {
        $this->setTagName('video');
    }

    public function getSrc(): string
    {
        return $this->src;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;
        return $this;
    }

    public function isPlaysInline(): bool
    {
        return $this->playsInline;
    }

    public function setPlaysInline(bool $playsInline): self
    {
        $this->playsInline = $playsInline;
        return $this;
    }

    public function isMuted(): bool
    {
        return $this->muted;
    }

    public function setMuted(bool $muted): self
    {
        $this->muted = $muted;
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

    public function isAutoplay(): bool
    {
        return $this->autoplay;
    }

    public function setAutoplay(bool $autoplay): self
    {
        $this->autoplay = $autoplay;
        return $this;
    }

    public function hasControls(): bool
    {
        return $this->controls;
    }

    public function setControls(bool $controls): self
    {
        $this->controls = $controls;
        return $this;
    }

    public function getMarkup(): string
    {
        if (empty($this->getSrc())) {
            return '';
        }

        $this->addAttribute('src', $this->getSrc());

        if ($this->isPlaysInline()) {
            $this->addAttribute('playsInline', '');
        }

        if ($this->isMuted()) {
            $this->addAttribute('muted', '');
        }

        if ($this->isLoop()) {
            $this->addAttribute('loop', '');
        }

        if ($this->isAutoplay()) {
            $this->addAttribute('autoplay', '');
        }

        if ($this->hasControls()) {
            $this->addAttribute('controls', '');
        }

        $this->prepareAttributes();

        return parent::getMarkup();
    }
}
