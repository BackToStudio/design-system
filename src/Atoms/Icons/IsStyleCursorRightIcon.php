<?php

namespace PlusQuePro\DesignSystem\Atoms\Icons;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponent;

class IsStyleCursorRightIcon extends TokenComponent
{
	public function getMarkup(): string
	{
		$svg =
			'<svg 
			' .
			$this->prepareAttributes() .
			'
			width="251" height="174" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M66.667 89.888c3.386-1.923 7.353 1.319 6.133 5.013l-6.458 19.097a.991.991 0 0 1-.049.117l-12.715 37.587-3.267 9.682c-1.265 3.828-6.661 3.909-8.024.112l-8.674-21.519a4.2 4.2 0 0 0-3.372-2.759l-24.867-3.601c-3.989-.577-4.994-5.877-1.482-7.884l12.162-6.945 4.141-2.364a.921.921 0 0 1 .094-.049L48 100.553c.027-.019.055-.037.084-.055l18.584-10.61Z" fill="#4BA9FF"/><path opacity=".8" d="M204.118 17.461c4.983-2.773 10.756 2.019 8.925 7.41l-9.685 27.87c-.021.059-.045.116-.073.17l-19.069 54.852-4.901 14.13c-1.898 5.587-9.803 5.64-11.755.066l-12.452-31.596a6.152 6.152 0 0 0-4.908-4.079l-36.384-5.57c-5.836-.892-7.245-8.66-2.078-11.555l17.898-10.016 6.094-3.41c.045-.027.092-.05.138-.07l40.779-22.82c.039-.028.08-.054.123-.079l27.348-15.303Z" fill="#fff"/></svg>';
		return $svg;
	}
}
