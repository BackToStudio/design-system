<?php

namespace BackTo\DesignSystem\Molecules\Image;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use BackTo\DesignSystem\Atoms\Figure\FigureComponent;
use BackTo\DesignSystem\Atoms\Image\ImageComponent;
use BackTo\DesignSystem\Atoms\Figcaption\FigcaptionComponent;
use BackTo\DesignSystem\Atoms\Link\LinkComponent;
use BackTo\DesignSystem\Molecules\MoleculeInterface;

class ImageCompoundComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    private FigureComponent $figure;
    private ImageComponent $image;
    private FigcaptionComponent $figcaption;
    private LinkComponent $link;

    public function __construct()
    {
        $this->figure = new FigureComponent();
        $this->image = new ImageComponent();
        $this->figcaption = new FigcaptionComponent();
        $this->link = new LinkComponent();
    }

    public function getFigureComponent(): FigureComponent
    {
        return $this->figure;
    }

    public function getImageComponent(): ImageComponent
    {
        return $this->image;
    }

    public function getFigcaptionComponent(): FigcaptionComponent
    {
        return $this->figcaption;
    }

    public function getLinkComponent(): LinkComponent
    {
        return $this->link;
    }

    public function getMarkup(): string
    {
        if (empty($this->getImageComponent()->getSrc())) {
            return '';
        }

        if (!empty($this->getLinkComponent()->getHref())) {
            $this->getLinkComponent()->addChild(
                $this->getImageComponent()->getMarkup()
            );
            $this->getFigureComponent()->addChild(
                $this->getLinkComponent()->getMarkup()
            );
        } else {
            $this->getFigureComponent()->addChild(
                $this->getImageComponent()->getMarkup()
            );
        }

        if (!empty($this->getFigcaptionComponent()->getChildren())) {
            $this->getFigureComponent()->addChild(
                $this->getFigcaptionComponent()->getMarkup()
            );
        }

        return $this->getFigureComponent()->getMarkup();
    }
}
