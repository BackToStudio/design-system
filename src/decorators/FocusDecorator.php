<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class FocusDecorator implements StyleDecorator
{
	public function getClassName(): string
	{
		return 'focus-visible:outline-none focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-secondary-500 rounded-full';
	}
}
