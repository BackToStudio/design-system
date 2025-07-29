<?php

namespace BackTo\DesignSystem\Atoms\Icon;

use Exception;
use BackTo\DesignSystem\Atoms\Icons\ArrowBottomIcon;
use BackTo\DesignSystem\Atoms\Icons\ArrowLeftIcon;
use BackTo\DesignSystem\Atoms\Icons\ArrowRightIcon;
use BackTo\DesignSystem\Atoms\Icons\FacebookIcon;
use BackTo\DesignSystem\Atoms\Icons\LinkedinIcon;
use BackTo\DesignSystem\Atoms\Icons\YoutubeIcon;
use BackTo\DesignSystem\Atoms\Icons\BurgerMenuIcon;
use BackTo\DesignSystem\Atoms\Icons\CloseIcon;
use BackTo\DesignSystem\Atoms\Icons\ArrowBottomDetailsIcon;
use BackTo\DesignSystem\Atoms\Icons\MonogramPqpIcon;
use BackTo\DesignSystem\Atoms\Icons\IsStyleCursorLeftIcon;
use BackTo\DesignSystem\Atoms\Icons\IsStyleCursorRightIcon;
use BackTo\DesignSystem\Atoms\Icons\LogoPqpIcon;
use BackTo\DesignSystem\Atoms\Icons\LogoPqpFullWhiteIcon;
use BackTo\DesignSystem\Atoms\Icons\ArrowTopIcon;
use BackTo\DesignSystem\Atoms\Token\TokenComponent;

class IconComponent extends TokenComponent
{
    private string $icon = '';

    public function __construct(string $icon)
    {
        $this->icon = $icon;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getMarkup(): string
    {
        $iconComponents = [
            'arrow_bottom' => ArrowBottomIcon::class,
            'arrow_right' => ArrowRightIcon::class,
            'arrow_left' => ArrowLeftIcon::class,
            'arrow_top' => ArrowTopIcon::class,
            'facebook' => FacebookIcon::class,
            'linkedin' => LinkedinIcon::class,
            'youtube' => YoutubeIcon::class,
            'burger_menu' => BurgerMenuIcon::class,
            'close' => CloseIcon::class,
            'arrow_bottom_details' => ArrowBottomDetailsIcon::class,
            'monogram_pqp' => MonogramPqpIcon::class,
            'cursor_left' => IsStyleCursorLeftIcon::class,
            'cursor_right' => IsStyleCursorRightIcon::class,
            'logo_pqp' => LogoPqpIcon::class,
            'logo_pqp_full_white' => LogoPqpFullWhiteIcon::class,
        ];

        if (!array_key_exists($this->getIcon(), $iconComponents)) {
            throw new Exception(
                sprintf(
                    'The icon %s does not exist in IconComponent. If you want to use a new icon, please add this icon in <code>IconComponent</code>',
                    $this->getIcon()
                )
            );
        }

        $iconClassName = $iconComponents[$this->getIcon()];
        $iconComponent = new $iconClassName();

        foreach ($this->getClasses() as $class) {
            $iconComponent->addClass($class);
        }

        foreach ($this->getAttributes() as $attribute => $value) {
            $iconComponent->addAttribute($attribute, $value);
        }

        return $iconComponent->getMarkup();
    }
}
