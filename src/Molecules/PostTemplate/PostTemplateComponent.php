<?php

namespace PlusQuePro\DesignSystem\Molecules\PostTemplate;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Molecules\MoleculeInterface;

class PostTemplateComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    public function getMarkup(): string
    {
        $this->setTagName('ul');
        $this->addClass('wp-block-post-template');

        return parent::getMarkup();
    }
}
