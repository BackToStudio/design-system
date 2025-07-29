<?php

namespace BackTo\DesignSystem\Molecules\PostTemplate;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use BackTo\DesignSystem\Molecules\MoleculeInterface;

class PostTemplateComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    public function getMarkup(): string
    {
        $this->setTagName('ul');
        $this->addClass('wp-block-post-template');

        return parent::getMarkup();
    }
}
