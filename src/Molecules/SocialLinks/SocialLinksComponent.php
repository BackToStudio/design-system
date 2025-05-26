<?php

namespace PlusQuePro\DesignSystem\Molecules\SocialLinks;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponent;
use PlusQuePro\DesignSystem\Molecules\MoleculeInterface;

class SocialLinksComponent extends TokenComponent implements MoleculeInterface
{
    public function getMarkup(): string
    {
        $this->setTagName('ul');
        $this->addClass('wp-block-social-links');

        return parent::getMarkup();
    }
}
