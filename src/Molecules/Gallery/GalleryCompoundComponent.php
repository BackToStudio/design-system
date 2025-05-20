<?php

namespace PlusQuePro\DesignSystem\Molecules\Gallery;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Atoms\Figcaption\FigcaptionComponent;
use PlusQuePro\DesignSystem\Atoms\Figure\FigureComponent;
use PlusQuePro\DesignSystem\Molecules\ImageCompoundComponent;
use PlusQuePro\DesignSystem\Molecules\MoleculeInterface;

class GalleryCompoundComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    private array $images = [];

    private FigcaptionComponent $figCaption;
    private FigureComponent $figure;

    public function __construct()
    {
        $this->figure = new FigureComponent();
        $this->figCaption = new FigcaptionComponent();
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function addImage(ImageCompoundComponent $image): self
    {
        $this->images[] = $image;
        return $this;
    }

    public function getFigureComponent(): FigureComponent
    {
        return $this->figure;
    }

    public function getFigcaptionComponent(): FigcaptionComponent
    {
        return $this->figCaption;
    }

    public function getMarkup(): string
    {
        foreach ($this->images as $image) {
            $this->getFigureComponent()->addChild($image->getMarkup());
        }

        if (!empty($this->getFigcaptionComponent()->getChildren())) {
            $this->getFigureComponent()->addChild($this->getFigcaptionComponent()->getMarkup());
        }

        return $this->getFigureComponent()->getMarkup();
    }
}
