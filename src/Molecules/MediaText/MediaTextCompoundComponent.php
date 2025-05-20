<?php

namespace PlusQuePro\DesignSystem\Molecules\MediaText;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;
use PlusQuePro\DesignSystem\Image\ImageComponent;

class MediaTextCompoundComponent extends TokenComponentWithChildren
{
    private ImageComponent $imageComponent;
    private TokenComponentWithChildren $mediaContainer;
    private TokenComponentWithChildren $contentContainer;

    private string $media = '';
    private string $position = '';
    private string $align = '';
    private bool $stackOnMobile = true;

    public function __construct()
    {
        $this->imageComponent = new ImageComponent();
        $this->mediaContainer = new TokenComponentWithChildren();
        $this->contentContainer = new TokenComponentWithChildren();
    }

    public function getMediaContainer(): TokenComponentWithChildren
    {
        return $this->mediaContainer;
    }

    public function getImageComponent(): ImageComponent
    {
        return $this->imageComponent;
    }

    public function getContentContainer(): TokenComponentWithChildren
    {
        return $this->contentContainer;
    }

    public function setMediaPosition(string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getMediaPosition(): string
    {
        return $this->position;
    }

    public function setVerticalAlignmentMediaText(string $align): static
    {
        $this->align = $align;

        return $this;
    }

    public function getVerticalAlignmentMediaText(): string
    {
        return $this->align;
    }

    public function setStackOnMobile(bool $stack): void
    {
        $this->stackOnMobile = $stack;
    }

    public function getStackOnMobile(): bool
    {
        return $this->stackOnMobile;
    }

    public function getMarkup(): string
    {
        $this->addClass('wp-block-media-text');

        $this->contentContainer->addClass('wp-block-media-text__content');

        $verticalAlignmentMediaTextClasses = [
            'top' => 'self-start',
            'bottom' => 'self-end',
            'center' => 'self-center',
        ];

        $verticalAlignmentMediaText = $this->getVerticalAlignmentMediaText();
        if (
            array_key_exists(
                $verticalAlignmentMediaText,
                $verticalAlignmentMediaTextClasses
            )
        ) {
            $this->addClass(
                $verticalAlignmentMediaTextClasses[$verticalAlignmentMediaText]
            );
        }

        if (!empty($verticalAlignmentMediaText)) {
            $this->contentContainer->addClass(
                $verticalAlignmentMediaTextClasses[$verticalAlignmentMediaText]
            );

            $this->mediaContainer->addClass(
                $verticalAlignmentMediaTextClasses[$verticalAlignmentMediaText]
            );

            $this->setVerticalAlignmentMediaText('');
        }

        foreach ($this->getChildren() as $child) {
            $this->contentContainer->addChild($child);
        }

        $this->clearChildren();

        $this->mediaContainer->addClass('wp-block-media-text__media');
        $this->mediaContainer->addChild($this->getImageComponent()->getMarkup());

        $this->mediaContainer->addClass(
            'col-span-1 h-full [&_img]:h-full [&_img]:w-full [&_img]:object-cover'
        );
        $this->contentContainer->addClass('col-span-1');

        $mediaPosition = $this->getMediaPosition();
        if (!empty($mediaPosition)) {
            $this->addClass('media-on-the-right');
            $this->mediaContainer->addClass('lg:order-2');
        }

        if (!$this->getStackOnMobile()) {
            $this->addClass('grid-cols-2');
            $this->removeClass('grid-cols-1');
        }

        $this->addChild($this->mediaContainer->getMarkup());
        $this->addChild($this->contentContainer->getMarkup());

        return parent::getMarkup();
    }
}
