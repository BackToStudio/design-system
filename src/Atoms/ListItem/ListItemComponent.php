<?php

namespace PlusQuePro\DesignSystem\Atoms\ListItem;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;

class ListItemComponent extends TokenComponentWithChildren
{
    public function __construct()
    {
        $this->setTagName('li');
    }

    public function getMarkup(): string
    {
        // TODO: Vérifier si on peut supprimer cette partie
        $existingChildren = $this->getChildren();
        $this->clearChildren();

        foreach ($existingChildren as $child) {
            $this->addChild($child);
        }

        return parent::getMarkup();
    }
}
