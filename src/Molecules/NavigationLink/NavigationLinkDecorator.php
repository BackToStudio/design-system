<?php

namespace PlusQuePro\DesignSystem\Molecules\NavigationLink;

use PlusQuePro\DesignSystem\StyleDecorator;
use PlusQuePro\DesignSystem\Decorators\BorderColorDecorator;

class NavigationLinkDecorator implements StyleDecorator
{
	public function getClassName(): string
	{
		$classNames = [];
		$classNames[] = 'px-global-padding lg:px-6';
		$classNames[] = 'w-full sm:w-auto';

		$border = new BorderColorDecorator('transparent');
		$classNames[] = $border->getClassName();

		return implode(' ', $classNames);
	}
}
