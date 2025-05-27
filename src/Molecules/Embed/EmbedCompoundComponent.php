<?php

namespace PlusQuePro\DesignSystem\Molecules\Embed;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Molecules\MoleculeInterface;

class EmbedCompoundComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    private TokenComponentWithChildren $figcaptionComponent;

    public function __construct()
    {
        $this->figcaptionComponent = new TokenComponentWithChildren();
    }

    public function getFigcaptionComponent(): TokenComponentWithChildren
    {
        return $this->figcaptionComponent;
    }

    public function getMarkup(): string
    {
        $this->setTagName('figure');
        $this->addClass('wp-block-embed');
        $this->addClass('relative');

        $this->figcaptionComponent->setTagName('figcaption');

        $this->addChild($this->figcaptionComponent->getMarkup());
        return parent::getMarkup();
    }
}
