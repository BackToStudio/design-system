<?php

namespace BackTo\DesignSystem\Molecules;

use BackTo\DesignSystem\Atoms\AtomComponentInterface;

interface MoleculeInterface extends AtomComponentInterface
{
    public function getMarkup(): string;
}
