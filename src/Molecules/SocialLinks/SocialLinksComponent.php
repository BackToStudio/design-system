<?php

namespace BackTo\DesignSystem\Molecules\SocialLinks;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use BackTo\DesignSystem\Molecules\MoleculeInterface;

class SocialLinksComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    public function getMarkup(): string
    {
        $this->setTagName('ul');
        $this->addClass('wp-block-social-links');

        return parent::getMarkup();
    }
}
