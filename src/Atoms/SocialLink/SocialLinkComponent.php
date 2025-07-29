<?php

namespace BackTo\DesignSystem\Atoms\SocialLink;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use BackTo\DesignSystem\Atoms\Link\LinkComponent;
use BackTo\DesignSystem\Atoms\Icon\IconComponent;

class SocialLinkComponent extends TokenComponentWithChildren
{
    private string $href = '';
    private string $service = '';

    public function setHref(string $href): void
    {
        $this->href = $href;
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setService(string $service): void
    {
        $this->service = $service;
    }

    public function getService(): string
    {
        return $this->service;
    }

    //add all services we need
    public function getMarkup(): string
    {
        $this->clearChildren();

        $this->setTagName('li');
        $this->addClass('wp-social-link');

        switch ($this->getService()) {
            case 'facebook':
                $this->prepareFacebookComponent();
                break;
            case 'linkedin':
                $this->prepareLinkedinComponent();
                break;
            case 'youtube':
                $this->prepareYoutubeComponent();
                break;
        }

        return parent::getMarkup();
    }

    public function prepareFacebookComponent(): void
    {
        $linkComponent = new LinkComponent();
        $linkComponent->addClass('wp-social-link-facebook');
        $linkComponent->addClass('bg-transparent');
        $linkComponent->setHref($this->getHref());

        $facebookIconComponent = new IconComponent('facebook');
        $linkComponent->addChild($facebookIconComponent->getMarkup());

        $this->addChild($linkComponent->getMarkup());
    }

    public function prepareLinkedinComponent(): void
    {
        $this->addClass('wp-social-link-linkedin');
        $linkComponent = new LinkComponent();
        $linkComponent->addClass('wp-social-link-linkedin');
        $linkComponent->addClass('bg-transparent');
        $linkComponent->setHref($this->getHref());

        $linkedinIconComponent = new IconComponent('linkedin');
        $linkComponent->addChild($linkedinIconComponent->getMarkup());

        $this->addChild($linkComponent->getMarkup());
    }

    public function prepareYoutubeComponent(): void
    {
        $this->addClass('wp-social-link-youtube');
        $linkComponent = new LinkComponent();
        $linkComponent->addClass('wp-social-link-youtube');
        $linkComponent->addClass('bg-transparent');
        $linkComponent->setHref($this->getHref());

        $youtubeIconComponent = new IconComponent('youtube');
        $linkComponent->addChild($youtubeIconComponent->getMarkup());

        $this->addChild($linkComponent->getMarkup());
    }
}
