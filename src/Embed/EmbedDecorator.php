<?php

namespace PlusQuePro\DesignSystem\Embed;

use PlusQuePro\DesignSystem\StyleDecorator;

class EmbedDecorator implements StyleDecorator
{
	public function getClassName(): string
	{
		$classNames =
			'[&_lite-youtube]:w-full [&_lite-youtube]:h-full [&_lite-youtube]:rounded-media [&_lite-youtube]:aspect-video [&_lite-youtube]:mx-auto [&_lite-youtube]:max-w-default';

		$classNames .= ' [&.alignfull_>_lite-youtube]:rounded-none';

		$classNames .= ' [&.alignfull_>_figcaption]:pl-global-padding';

		return $classNames;
	}
}
