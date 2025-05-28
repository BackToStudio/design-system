<?php

namespace PlusQuePro\DesignSystem\Molecules\Cover;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Atoms\Token\HasBackgroundImage;
use PlusQuePro\DesignSystem\Atoms\Token\HasBackgroundRepeated;
use PlusQuePro\DesignSystem\Atoms\Token\HasBackgroundParallax;
use PlusQuePro\DesignSystem\Atoms\Token\HasOpacity;
use PlusQuePro\DesignSystem\Atoms\Figure\FigureComponent;
use PlusQuePro\DesignSystem\Atoms\Video\VideoComponent;
use PlusQuePro\DesignSystem\Atoms\Image\ImageComponent;
use PlusQuePro\DesignSystem\Molecules\MoleculeInterface;

class CoverCompoundComponent extends TokenComponentWithChildren implements MoleculeInterface
{
    use HasBackgroundImage;
    use HasBackgroundRepeated;
    use HasBackgroundParallax;
    use HasOpacity;

    private string $backgroundType = 'default';

    private TokenComponentWithChildren $backgroundDimContainer;
    private TokenComponentWithChildren $innerContainer;
    private FigureComponent $imageContainer;
    private VideoComponent $videoComponent;
    private ImageComponent $imageComponent;

    public function __construct()
    {
        $this->backgroundDimContainer = new TokenComponentWithChildren();
        $this->innerContainer = new TokenComponentWithChildren();
        $this->imageContainer = new FigureComponent();
        $this->imageComponent = new ImageComponent();
        $this->videoComponent = new VideoComponent();
    }

    public function getBackgroundDimContainer(): TokenComponentWithChildren
    {
        return $this->backgroundDimContainer;
    }

    public function getInnerContainer(): TokenComponentWithChildren
    {
        return $this->innerContainer;
    }

    public function getImageContainer(): FigureComponent
    {
        return $this->imageContainer;
    }

    public function getVideoComponent(): VideoComponent
    {
        return $this->videoComponent;
    }

    public function getImageComponent(): ImageComponent
    {
        return $this->imageComponent;
    }

    public function setBackgroundType(string $backgroundType): static
    {
        $this->backgroundType = $backgroundType;

        return $this;
    }

    public function getBackgroundType(): string
    {
        return $this->backgroundType;
    }

    public function getMarkup(): string
    {
        $this->addClass('wp-block-cover relative');

        $this->backgroundDimContainer->addClass(
            'wp-block-cover__background has-background-dim absolute inset-0 z-0'
        );
        $this->innerContainer->addClass(
            'wp-block-cover__inner-container relative z-10 text-white'
        );

        // Dim background
        $this->backgroundDimContainer->addClass(
            'bg-black opacity-' . $this->getOpacity()
        );

        if ($this->getBackgroundType() === 'image') {
            $this->imageContainer->addClass('absolute inset-0 z-0');

            $this->imageComponent->setSrc($this->getBackgroundImage());
            $this->imageComponent->addClass(
                'absolute inset-0 object-cover w-full h-full'
            );

            $this->imageContainer->addChild($this->imageComponent->getMarkup());
            $this->addChild($this->imageContainer->getMarkup());
        }

        if ($this->getBackgroundType() === 'video') {
            $this->videoComponent->setSrc($this->getBackgroundImage());
            $this->videoComponent->addClass(
                'absolute inset-0 object-cover w-full h-full'
            );
            $this->videoComponent->setLoop(true);
            $this->videoComponent->setAutoplay(true);
            $this->videoComponent->setMuted(true);
            $this->videoComponent->setPlaysInline(true);

            $this->addChild($this->videoComponent->getMarkup());
        }

        foreach ($this->getChildren() as $child) {
            $this->innerContainer->addChild($child);
        }

        $this->clearChildren();

        $this->addChild($this->backgroundDimContainer->getMarkup());
        $this->addChild($this->innerContainer->getMarkup());

        return parent::getMarkup();
    }
}
