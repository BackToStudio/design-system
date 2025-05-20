<?php

namespace PlusQuePro\DesignSystem\Molecules;

use PlusQuePro\DesignSystem\Atoms\AtomComponentInterface;

interface MoleculeInterface extends AtomComponentInterface
{
    public function getMarkup(): string;
}
