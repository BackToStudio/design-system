<?php

namespace PQP\Components;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Summary\SummaryComponent;

class DetailsCompoundComponent extends TokenComponentWithChildren
{
    private SummaryComponent $summaryComponent;
    private TokenComponentWithChildren $contentComponent;

    private bool $showContent = false;

    public function __construct()
    {
        $this->summaryComponent = new SummaryComponent();
        $this->contentComponent = new TokenComponentWithChildren();
    }

    public function setShowContent(bool $showContent): void
    {
        $this->showContent = $showContent;
    }

    public function getShowContent(): bool
    {
        return $this->showContent;
    }

    public function getSummaryComponent(): SummaryComponent
    {
        return $this->summaryComponent;
    }

    public function getContentComponent(): TokenComponentWithChildren
    {
        return $this->contentComponent;
    }

    public function getMarkup(): string
    {
        $this->setTagName('details');
        $this->addClass('wp-block-details');

        if ($this->getShowContent()) {
            $this->addAttribute('open', true);
        }

        $this->contentComponent->addClass('wp-block-details__wrapper');

        $this->addChild($this->summaryComponent->getMarkup());
        $this->addChild($this->contentComponent->getMarkup());

        return parent::getMarkup();
    }
}
