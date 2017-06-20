<?php //strict
namespace Ceres\Controllers;

use IO\Controllers\LayoutController;

/**
 * Class TennisController
 * @package Ceres\Controllers
 */
class TennisController extends LayoutController
{
	public function showTennis():string
	{
		return $this->renderTemplate(
			"tpl.tennis",
			[
				"tennis" => ""
			]
		);
	}
}
