<?php

namespace BackTo\DesignSystem\Molecules\Quote;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use BackTo\DesignSystem\Molecules\MoleculeInterface;

class QuoteCompoundComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    private TokenComponentWithChildren $citeComponent;
    private TokenComponentWithChildren $contentComponent;

    public function __construct()
    {
        $this->citeComponent = new TokenComponentWithChildren();
        $this->contentComponent = new TokenComponentWithChildren();
    }

    public function getContentComponent(): TokenComponentWithChildren
    {
        return $this->contentComponent;
    }

    public function getCiteComponent(): TokenComponentWithChildren
    {
        return $this->citeComponent;
    }

    public function getMarkup(): string
    {
        $this->setTagName('blockquote');
        $this->addClass('wp-block-quote');

        $this->citeComponent->setTagName('cite');
        $this->contentComponent->addClass('wp-block-quote__content');

        $this->addChild($this->contentComponent->getMarkup());
        $this->addChild($this->citeComponent->getMarkup());

        return parent::getMarkup();
    }
}
