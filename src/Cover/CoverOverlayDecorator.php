<?php

namespace PlusQuePro\DesignSystem\Cover;

use PlusQuePro\DesignSystem\StyleDecorator;

class CoverOverlayDecorator implements StyleDecorator
{
	public function getClassName(): string
	{
		return 'absolute w-full h-full z-10 inset-0';
	}
}
