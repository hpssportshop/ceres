<?php //strict
namespace Ceres\Controllers;

use IO\Controllers\LayoutController;

/**
 * Class HockeyController
 * @package Ceres\Controllers
 */
class HockeyController extends LayoutController
{
	public function showHockey():string
	{
		return $this->renderTemplate(
			"tpl.hockey",
			[
				"hockey" => ""
			]
		);
	}
}
